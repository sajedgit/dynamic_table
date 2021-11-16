<?php include_once "header.php"?>

<?php

$table_name = $_REQUEST["table_name"];
$column_sql = get_column_name($table_name);
$result = $conn->query($column_sql);
$result_array =  array();


if(count($_POST)>0)
{

    $data_sql = insert_table_data($table_name,$_POST);
    $result_data = $conn->query($data_sql);
    if($result_data === TRUE)
    {
        header("Location: table_by_name.php?table_name=$table_name");
        die();
    }
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
            <h1>insert  data into <?php echo $table_name; ?> </h1>

        </div>


    </div>


    <br/>

    <div class="">

        <form name="form_submit" method="post" class="form-horizontal" action="">

            <?php $i=0; while($row = $result->fetch_array()) {

                array_push($result_array,$row['Field']);

                $i++; if($i==1) continue;

                ?>


                <div class="form-group">
                    <label class="control-label col-sm-3" for="<?php echo $row['Field'] ?>"><?php echo $row['Field'] ?>:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="email" placeholder="Enter <?php echo $row['Field'] ?>" name="<?php echo $row['Field'] ?>">
                    </div>
                </div>

            <?php } ?>



            <br/>
            <input  type="submit" class="btn btn-primary col-xs-2 col-xs-offset-5" value="Submit" >
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
