<?php include_once "header.php"?>

<?php

$table_name = $_REQUEST["table_name"];
$column_sql = get_column_name($table_name);
$result = $conn->query($column_sql);
$result_array =  array();


if(isset($_POST))
{

    $data_sql = get_table_data_by_filter($table_name,$_POST);
    $result_data = $conn->query($data_sql);
}
else
{
    $data_sql = get_table_data($table_name);
    $result_data = $conn->query($data_sql);
}




?>

<div class="container">

    <div class="row">
        <div class="col-xs-9">
            <h1>View all data from <?php echo $table_name; ?> </h1>

        </div>
        <div class="col-xs-2" style="margin-top: 30px;">
            <a href="insert_data.php?table_name=<?php echo $table_name; ?>" class="btn btn-primary">Insert data</a>

        </div>

    </div>


    <br/>

    <div class="">
        <p>Search data by different criteria  </p>
        <form name="filter" method="post" class="form-inline" action="">

            <?php $i=0; while($row = $result->fetch_array()) {

                array_push($result_array,$row['Field']);

                $i++; if($i==1) continue;

                ?>
                <div class="form-group" style="margin: 20px;">
                    <label for="email"><?php echo $row['Field'] ?></label>
                    <input type="text" class="form-control" name="<?php echo $row['Field'] ?>">
                </div>
            <?php } ?>



<br/>
            <button  type="submit" class="btn btn-primary col-xs-2 col-xs-offset-5"  >Filter</button>
        </form>

        <br/><br/>

    </div>

    <br/>

</div>

<div class="container">

    <table class="table table-striped">
        <thead>
        <tr>
            <?php foreach($result_array as $row_header) {  ?>
            <th><?php echo $row_header ?></th>
            <?php } ?>
        </tr>
        </thead>
        <tbody>

        <?php while($data_row = $result_data->fetch_array()) { $counter = 0;  ?>

           <tr>
               <td> <?php echo $data_row[$counter++]; ?> </td>
               <td> <?php echo $data_row[$counter++]; ?> </td>
               <td> <?php echo $data_row[$counter++]; ?> </td>
               <td> <?php echo $data_row[$counter++]; ?> </td>
           </tr>

        <?php  } ?>

        </tbody>
    </table>

</div>


</body>
</html>
