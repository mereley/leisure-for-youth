<?php


 $connection = mysql_connect('localhost', 'local', '1234');
 $db = mysql_select_db("my_bd");
 // mysql_query(" SET NAMES 'utf-8' ");
 mysql_set_charset("utf-8");
if(!$connection || !$db)
{
    exit(mysql_error());
}

?>