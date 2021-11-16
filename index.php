

<?php include_once "header.php"?>

<div class="container">

    <div class="">
        <h1>Dynamic Table Creation Page</h1>
        <p>Create the tables and its column dynamichally</p>
    </div>

</div>


<div class="container">
    <div class="col-sm-10 ">
        <form method="post" class="" action="table_submit.php">

            <div class="row">
                <div class="form-group">
                    <label class="" for="email">Table Name:</label>
                    <input type="text" class="form-control"  placeholder="Table Name"  name="table_name">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label class="" for="email">Column Name:</label>
                    <input type="text" class="form-control"   placeholder="Column Name"  name="column_1[]">
                </div>
                <div class="form-group col-sm-3">
                    <label class=" " for="pwd">Type:</label>
                    <select name="column_1[]" class="form-control" id="">
                        <option value="TEXT">TEXT</option>
                        <option value="INT">NUMBER</option>
                        <option value="DATETIME">DATE</option>
                    </select>
                </div>

            </div>


            <div class="row">
                <div class="form-group col-sm-6">
                    <label class="" for="email">Column Name:</label>
                    <input type="text" class="form-control"   placeholder="Column Name"  name="column_2[]">
                </div>
                <div class="form-group col-sm-3">
                    <label class=" " for="pwd">Type:</label>
                    <select name="column_2[]" class="form-control" id="">
                        <option value="TEXT">TEXT</option>
                        <option value="INT">NUMBER</option>
                        <option value="DATETIME">DATE</option>
                    </select>
                </div>

            </div>


            <div class="row">
                <div class="form-group col-sm-6">
                    <label class="" for="email">Column Name:</label>
                    <input type="text" class="form-control"   placeholder="Column Name"  name="column_3[]">
                </div>
                <div class="form-group col-sm-3">
                    <label class=" " for="pwd">Type:</label>
                    <select name="column_3[]" class="form-control" id="">
                        <option value="TEXT">TEXT</option>
                        <option value="INT">NUMBER</option>
                        <option value="DATETIME">DATE</option>
                    </select>
                </div>

            </div>




            <div class="row">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>



        </form>
    </div>
  </div>
</div>

</body>
</html>







