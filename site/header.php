<?php
session_start();
if(!isset($_SESSION["site"])&&!isset($_SESSION["number"]))
{
    header("Location:Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Магазин PC/PHONE/...</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style>
        #output {
            clear: both;
        }

        #checkoutdiv {
            display: none;
        }

        .footer {
            background-color: darkgrey;
            color: white;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="htop">
        <div id="checkoutdiv " class="container">
            <div class="row" >
                <div class="col-md-6 text-xs-right "><span><?php echo "Здраствуйте, ".$_SESSION["site"]; echo " у вас"; ?> </span>(<span class="items text-muted"></span> <small>товаров</small>) <span class="total"></span> </div>
                <div class="col-md-6 text-xs-right">
                    <span class="btn btn-success" data-toggle="modal" data-target="#cart">Открыть окно корзины</span>
                    <a href="checkout.php" class="btn btn-primary">Перейти в корзину</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hbot">
        <div class="container">
            <nav class="navbar navbar-full navbar-dark bg-inverse">
                <button class="navbar-toggler light float-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#nvbar"></button>
                <div id="nvbar" class="collapse navbar-toggleable-xs">
                    <ul class="nav navbar-nav float-sm-right ">
                        <li class="nav-item"><a class="nav-link" href="index.php">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">О нас</a></li>
                        <li class="nav-item"><a class="nav-link" href="error.php">Другие товары(не работает)</a></li>
                        <li class="nav-item"><a class="nav-link" href="Admin.php">Admin Panel</a></li>
                        <li class="nav-item"><a class="nav-link" href="Login.php">Выход</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="content">
    <?php
    include('db.php');
    $upload_dir = 'uploads/';
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Список действующих товаров</div>
                            <div class="card-body">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Изображение</th>
                                        <th>Название</th>
                                        <th>Стоимость</th>
                                        <th>Количество</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Изображение</th>
                                        <th>Название</th>
                                        <th>Стоимость</th>
                                        <th>Количество</th>
                                        <th>Действие</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $sql = "select * from contacts";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result)){
                                        while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><img src="<?php echo $upload_dir.$row['image'] ?>" width="auto" height="45"></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['money'] ?> ₽</td>
                                                <td><?php echo $row['number'] ?> шт.</td>
                                                <td class="text-center">
                                                    <a href="UserShow.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Посмотреть <i class="fa fa-eye"></i></a>
                                                    <a href="#" class="productItem btn btn-primary" data-name="PC" data-s="white" data-money="30000" data-id="2">В корзину</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/bootstrap.min.js" charset="utf-8"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable();
                } );
            </script>


</div>



