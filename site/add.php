<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $money = $_POST['money'];
    $number = $_POST['number'];

    $imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

    if(empty($name)){
			$errorMsg = 'Пожалуйста, введите название товара';
		}elseif(empty($money)){
			$errorMsg = 'Пожалуйста, введите стоимость';
		}elseif(empty($number)){
			$errorMsg = 'Пожалуйста, введите количество';
		}else{

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Изображение слишком велико';
				}
			}else{
				$errorMsg = 'Пожалуйста, выберите действительное изображение';
			}
		}


		if(!isset($errorMsg)){
			$sql = "insert into contacts(name, money, number, image)
					values('".$name."', '".$money."', '".$number."', '".$userPic."')";
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'Новая запись успешно добавлена';
				header('Location: Admin.php');
			}else{
				$errorMsg = 'Ошибочка '.mysqli_error($conn);
			}
		}
  }
?>
