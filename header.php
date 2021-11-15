<?php
include_once "config.php";
include_once "functions.php";

?>

<?php
$get_query = get_tables_name();
$result = $conn->query($get_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">MoFL</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>

                <?php
                while($row = $result->fetch_assoc())
                {
                    ?>
                    <li><a href="table_by_name.php?table_name=<?php echo $row["table_name"]; ?>"><?php echo $row["table_display_name"]; ?></a></li>
                    <?php
                }

                ?>

            </ul>
        </div>
    </nav>


</div>
