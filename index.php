<!DOCTYPE html>
<?php
require_once 'fn.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Главнная страница</title>
        <script type="text/javascript" src="jquery.js"> </script>
        <script type="text/javascript" src="myscript.js"> </script>
    </head>
    <body>
<h3 style="text-align: left;">Список клиентов парковки</h3>
<div style="margin: 0 auto;">
<table border="2">
 <tr>
    <th>№</th>
    <th>Ф.И.О.</th>
    <th>Пол</th>
    <th>Телефон</th>
    <th>Адрес</th>
    <th>Кол-во авто</th>
    <th>Марка автомобиля</th>
    <th>Модель автомобиля</th>
    <th>Цвет автомобиля</th>
    <th>Номер автомобился</th>
    <th>Статус автомобиля</th>
    <th>Редактировать</th>
    <th>Удалить</th>

 </tr>
 <?php foreach(select_list() as $val):?>
 <tr>

    <td><?php echo $val['id'] ?></td>
    <td><?php echo $val['firstname'] ?></td>
    <td><?php echo $val['sex'] ?></td>
    <td><?php echo $val['phone'] ?></td>
    <td><?php echo $val['address'] ?></td>
    <td><?php echo $val['auto'] ?></td>
    <td><?php echo $val['marka'] ?></td>
    <td><?php echo $val['model'] ?></td>
    <td><?php echo $val['color'] ?></td>
    <td><?php echo $val['number'] ?></td>
    <td><var>&nbsp; <input type="checkbox" />&nbsp; На месте</td>
    <td><button><a href="edit.php?edit=<?php echo $val['id'] ?>">Редактировать</a></button></td>
    <td><button data-del="<?php echo $val['id'] ?>">Удалить</button></td>


 </tr>
  <?php endforeach; ?>
</table>
</div>
<p><button><a href="add.php">Добавить клиента</a></button></p>
    </body>
</html>
