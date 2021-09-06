
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
</head>
<style>
    body {
        background: #FFC040;
        margin:0px;
        font-family:Verdana;
        font-weight:100;
        font-size:14px;
    }
    
    </style>
<body>
<br/><br/>
<p align="center">
<?php

include_once("db.php");

$id = $_GET['id'];

mysql_query("DELETE FROM news WHERE id='$id' ");

mysql_close();

echo "Удаление прошло успешно";?>
<br/><br/>


<a href='catalog.php'>НАЗАД</a></p>

</body>
</html>