<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавление публикации</title>

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
<form method="post" action="add.php">
<p align="center">
Заголовок публикации: <br />
<input type="text" name="title" /><br /><br />
Текст публикации: <br />
<textarea cols="40" rows="10" name="text"></textarea><br /><br />
Автор публикации: <br />
<input type="text" name="author" />
<input type="hidden" name="date" value="<?php echo date ('Y-m-d');?>" /><br /><br />
Загрузить изображение:</p>
<p align="center">Для удобства и оптимизации укажите путь к изображению. Например: images/kartinka.png</p>
<p align="center"><input type="text" name="img" /><br /><br />
<input type="submit" align="center" name="add" value="Добавить" /><br /><br />

<a href='catalog.php'>НАЗАД</a></p>

</form>

<?php 

include_once ('db.php');
if (isset ($_POST['title']) AND $_POST['text'] AND $_POST['author'])
{
if (isset ($_POST['add']))
{
$title = strip_tags(trim($_POST['title']));
$text = strip_tags(trim($_POST['text']));
$author = strip_tags(trim($_POST['author']));
$date = $_POST['date'];
$img = strip_tags(trim($_POST['img']));
$result = mysql_query("
                    INSERT INTO news (title, text, date, author, img) 
                    VALUES('$title', '$text', '$date','$author','$img') 
                      ");
  

    
mysql_close();
echo "Публикация успешно добавлена!";
} 

}else{echo "введите все данные";
     }
    
?>

</body>
</html>