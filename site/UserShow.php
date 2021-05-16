<?php
require_once('db.php');
$upload_dir = 'uploads/';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from contacts where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else {
        $errorMsg = 'Не удалось найти запись';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Просмотр товара</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Просмотр
            </div>
            <div class="card-body" >
                <div class="row">
                    <div class="col-md">
                        <img src="<?php echo $upload_dir.$row['image'] ?>" height="700">
                    </div>
                    <div class="col-md">
                        <h5 class="form-control"><i class="fa fa-user-check">
                                <span><?php echo $row['name'] ?></span>
                            </i></h5>
                        <h5 class="form-control"><i class="fa fa-money-bill">
                                <span><?php echo $row['money'] ?></span>
                            </i></h5>
                        <h5 class="form-control"><i class="fa fa-sort-amount-down">
                                <span><?php echo $row['number'] ?></span>
                            </i></h5>


                        <a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i><span>Назад</span></a>

                    </div>
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
</body>
</html>
