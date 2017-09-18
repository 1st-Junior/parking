<!DOCTYPE html>
<?php
include_once 'fn.php';
if(isset($_POST['id'])){
edit();
}
if(isset($_GET['edit'])){
 $row = select_one();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Редактирование данных</title>
    </head>
    <body>
      <div style="margin:0 auto; width:450px;">
      	<fieldset>
      	   <legend>Редактирование данных</legend>
      	   <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
      	   <label>Ф.И.О. *</label><br/>
      	   <input type="text" name="firstname" value="<?php echo $row['firstname']?>"/><br/>
      	   <label>Пол *</label><br/>
      	   <input type="text" name="sex" value="<?php echo $row['sex']?>" /><br/>
      	   <label>Номер телефона *</label><br/>
      	   <input type="text" name="phone" value="<?php echo $row['phone']?>" /><br/>
      	   <label>Адрес</label><br/>
      	   <input type="text" name="address" value="<?php echo $row['address']?>" /><br/>
      	   <label>Кол-во авто *</label><br/>
      	   <input type="text" name="auto" value="<?php echo $row['auto']?>" /><br/><br/>
      	   <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
      	   <input type="submit" value="Сделать запись " />

           </form>
            <p>Поля отмеченные * обязательны для заполнения</p>

      	</fieldset>
      </div>
    </body>
</html>
<?php
} else {
	header("Location: index.php");
	}
	?>