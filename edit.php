<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Редактирование публикации</title>
    
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

<?php 

require_once ('db.php');

$id = $_GET['id'];

$result = mysql_query(" SELECT  title, text, date, author, img
                        FROM news
                        WHERE id='$id'
                        ");
                    


$row = mysql_fetch_array($result);

if(isset ($_POST['save']))
{
  $title = strip_tags(trim($_POST['title']));
  $text = strip_tags(trim($_POST['text']));
  $author = strip_tags(trim($_POST['author']));
  $img = strip_tags(trim($_POST['img']));
  $result = mysql_query("     
                    UPDATE news SET title='$title',text='$text', author='$author', img='$img'
                    WHERE id='$id' 
                      ");
  mysql_close();    
  echo "Публикация успешно отредактирована!";
}
?>
<form method="post" action="edit.php?id=<?php echo $id;?>">
<p align="center">
Заголовок публикации: <br />
<input type="text" name="title" value="<?php echo $row['title']; ?>" /><br /><br />

Текст публикации: <br />
<textarea cols="40" rows="10" name="text"><?php echo $row['text']; ?></textarea><br /><br />

Автор публикации: <br />
<input type="text" name="author" value="<?php echo $row['author']; ?>" /><br /><br />
Загрузить изображение:<br /> </p>
<p align="center">Для того, чтобы загрузить картинку, укажите её путь. Например:img/park.png</p>
<p align="center"><input type="text" name="img" value="<?php echo $row['img']; ?>"/><br /><br />
<input type="submit" name="save" value="Сохранить" /><br/><br />
    <a href='catalog.php'>НАЗАД</a></p>

</form>

</body>
</html>