<?php
/*
 *
 * подключение к БД
 */

function connect_db(){
	$bd = new mysqli('localhost','qwerty','12345','bd');
        mysqli_query($bd, "SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

	if($bd->connect_error){
		die('Connect Error: '.$bd->connect_error);

		}
		return $bd;

		}


function select_list(){
    	$bd = connect_db();
       $sql="SELECT * FROM klient, auto";
       if($res = $bd->query($sql)){
       		if($res->num_rows > 0){
       			$row= $res->fetch_all(MYSQLI_ASSOC);
       	 }
       	}
       	else {
       		echo 'Запрос не прошел ' . $bd->error;
       		}
       		return $row;
       		}



 /*
  *
  * Удаление записей
  *
  */
  function del(){
 	$bd = connect_db();
 	if(isset($_GET['del'])){
 		$id = $_GET['del'];
 		$sql = "DELETE FROM klient, auto WHERE id = ? LIMIT 1";
 		if($stmt = $bd->prepare($sql)){
 			$stmt->bind_param("i",$id);
 			$stmt->execute();
 			$stmt->close();
 			header("Location: index.php");
 }else{
 	echo "Запрос к базе данных не прошел ".$bd->error;
 }}}


  /*
 *
 * Добавление записи
 *
 */
 function add(){
 	$bd = connect_db();
 	if(isset($_POST['firstname'])){
 		$firstname = $_POST['firstname'];
 		$sex = $_POST['sex'];
 		$phone = $_POST['phone'];
 		$address = $_POST['address'];
 		$auto = $_POST['auto'];
 		$firstname = mysqli_real_escape_string($bd, $firstname);
 		$sex = mysqli_real_escape_string($bd, $sex);
 		$phone = mysqli_real_escape_string($bd, $phone);
 		$address = mysqli_real_escape_string($bd, $address);
 		$auto = mysqli_real_escape_string($bd, $auto);

 		if($firstname != "" && $sex != "" && $phone != "" && $auto != ""){
 			$sql = "INSERT INTO klient VALUES(NULL, '$firstname','$sex','$phone','$address','$auto')";
 			if($bd->query($sql)){
 				header("Location: index.php");
 			}else {
 				echo "Запрос не прошел".$bd->error;

 			}

 			}else {
 				echo "<h3>Необходимо заполнить поля!</h3>";

       }
      }
  	if(isset($_POST['marka'])){
 		$marka = $_POST['marka'];
 		$model = $_POST['model'];
 		$color = $_POST['color'];
 		$number = $_POST['number'];
 		$marka = mysqli_real_escape_string($bd, $marka);
 		$model = mysqli_real_escape_string($bd, $model);
 		$color = mysqli_real_escape_string($bd, $color);
 		$number = mysqli_real_escape_string($bd, $numbber);

 		if($marka != "" && $model != "" && $color != "" && $number != ""){
 			$sql = "INSERT INTO auto VALUES(NULL, '$marka','$model','$color','$number')";
 			if($bd->query($sql)){
 				header("Location: index.php");
 			}else {
 				echo "Запрос не прошел".$bd->error;

 			}

 			}else {
 				echo "<h3>Необходимо заполнить поля!</h3>";

       }
      }
 }
   /*
  *
  * Обновление записей
  *
  */
function edit(){
 	$bd = connect_db();
 	if(isset($_POST['id'])){
 		$id = $_POST['id'];
 		$firstname = $_POST['firstname'];
 		$sex = $_POST['sex'];
 		$phone = $_POST['phone'];
 		$address = $_POST['address'];
 		$auto = $_POST['auto'];

 		$sql = "UPDATE klient SET firstname = ?, sex = ?, phone = ?, address = ?, auto = ? WHERE id = ?";
 	    if($stmt = $bd->prepare($sql)){
 	    	 $stmt->bind_param("ssisii",$firstname,$sex,$phone,$address,$auto,$id);
 	    	 $stmt->execute();
 	    	 $stmt->close();
 	    	 header("Location: index.php");
 	    }

 	}else {
 		echo "Запрос не прошел";
 	}
 }

 /*
  *
  * Вывод одной записи
  *
  */
  function select_one(){
  	 $bd = connect_db();
  	 if(isset($_GET['edit'])){
  	 	$id = $_GET['edit'];

  	 	$sql = "SELECT * FROM klient WHERE id = '$id' LIMIT 1";
  	 	if($res = $bd->query($sql)){
  	 		if($res->num_rows > 0){
  	 			$row = $res->fetch_assoc();
  	 			}else{
  	 				echo "Запрос к базе данных не прошел ".$bd->error;
  	 				}
  	 	}
  	 }
  	 return $row;
  	}






?>