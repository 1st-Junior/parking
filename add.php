<!DOCTYPE html>
<?php
require_once 'fn.php';
add();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ввод данных</title>
    </head>
    <body>
      <div style="margin:0 auto; width:450px;">
      	<fieldset>
      	   <legend>Введите данные</legend>
      	   <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
      	   <label>Ф.И.О. *</label><br/>
      	   <input type="text" name="firstname" /><br/>
      	   <label>Пол *</label><br/>
      	   <input type="text" name="sex" /><br/>
      	   <label>Номер телефона *</label><br/>
      	   <input type="text" name="phone" /><br/>
      	   <label>Адрес</label><br/>
      	   <input type="text" name="address" /><br/>
      	   <label>Кол-во авто *</label><br/>
      	   <input type="text" name="auto" /><br/>
      	   <label>Марка автомобиля *</label><br/>
      	   <input type="text" name="marka" /><br/>
      	   <label>Модель автомобиля *</label><br/>
      	   <input type="text" name="model" /><br/>
      	   <label>Цвет автомобиля *</label><br/>
      	   <input type="text" name="color" /><br/>
      	   <label>Номер автомобиля *</label><br/>
      	   <input type="text" name="number" /><br/><br/>
      	   <input type="submit" value="Сделать запись" />
           </form>
        <p>Поля отмеченные * обязательны для заполнения</p>
      	</fieldset>
      </div>
    </body>
</html>
