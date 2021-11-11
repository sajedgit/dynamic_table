<?php

function table_name_rename($table_name)
{
    $table_name = str_replace(" ","_",$table_name);

    return	$table_name;

}


function get_sql_query($table_name,$total_row)
{
    $column_query="CREATE TABLE IF NOT EXISTS $table_name (  id INT  AUTO_INCREMENT PRIMARY KEY,";
    for ($i=1;$i<$total_row;$i++)
    {
        $column = "column_".$i;
        //print_r($_REQUEST[$column]);
        $column_query.= table_name_rename(trim($_REQUEST[$column][0]))." ".table_name_rename(trim($_REQUEST[$column][1]))." NOT NULL";
        if($i<$total_row-1)
            $column_query.= ",";
    }
    $column_query.=")";

    return $column_query;
}


function  insert_in_all_tables($table_name,$table_display_name)
{
    $sql = "INSERT INTO all_tables (`department_id`,`table_name`,`table_display_name`,`sort`,`status`) 
            VALUES (1, '$table_name', '$table_display_name',last_insert_id(),1)";

    return $sql;
}


function  get_tables_name()
{
    $sql = "select * from all_tables where status=1 order by sort asc";
    return $sql;
}


function  get_column_name($table_name)
{
    $sql = "DESCRIBE  $table_name";
    return $sql;
}



function  get_table_data($table_name)
{
    $sql = "select * from $table_name";
    return $sql;
}



function  get_table_data_by_filter($table_name,$row)
{
      $str = implode(' and ', array_map(
            function ($k, $v) { return "`$k` like '%$v%'"; },
            array_keys($row),
            array_values($row)
        ));


    if(empty($str))
        $condition = " where 1 ";
    else
        $condition = " where ".$str;


    $sql = "select * from $table_name  $condition";
    return $sql;
}



?>
