<?php

include_once "config.php";
include_once "functions.php";



//print_r($_REQUEST);
$table_display_name = trim($_REQUEST["table_name"]);
$table_name = table_name_rename($table_display_name);
$total_row = count($_REQUEST);

echo $sql = get_sql_query($table_name,$total_row);


$result = $conn->query($sql);

if ($result === TRUE)
{
    echo "<br/>Table $table_name created successfully";
    $sql_updated = insert_in_all_tables($table_name,$table_display_name);
    $result_updated = $conn->query($sql_updated);
    if ($result_updated === TRUE)
    {
        echo "<br/>Table 'all_tables' updated successfully";
    }
    else
    {
        echo "<br/>Error creating table: " . $conn->error;
    }
}
else
{
    echo "<br/>Error creating table: " . $conn->error;
}

$conn->close();




?>
