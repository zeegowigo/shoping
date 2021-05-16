<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>О нас</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

</head>
<style>
    .htop .row{
        background-color: white;
    }
</style>
<body>
<header class="header">
    <div class="htop">
        <div id="checkoutdiv " class="container">
            <div class="row" >
                <div class="col-md-6 text-xs-right ">(<span class="items text-muted"></span> <small>товары</small>) <span class="total"></span> </div>
                <div class="col-md-6 text-xs-right"> <span class="btn btn-success" data-toggle="modal" data-target="#cart">Открыть окно корзины</span><a href="checkout.php" class="btn btn-primary">Перейти в корзину</a></div>
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
                        <li class="nav-item"><a class="nav-link" href="Login.php">Выход</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="container">

    <h2>О нас <span>Информация/Правила магазина!</span></h2>

    <input type="checkbox" id="view-0">
    <label for="view-0">Как купить?</label>
    <div class="content" id="content-0">
        <div>Информация о магазине</div>
    </div>

    <input type="checkbox" id="view-1">
    <label for="view-1">Связать с поддержкой</label>
    <div class="content" id="content-1">
        <div>Информация о магазине<a target="_top" href="Ссылка на правило">/ vk/zeegowigo /</a></div>
    </div>

    <input type="checkbox" id="view-2">
    <label for="view-2">Наши точки</label>
    <div class="content" id="content-2">
        <div>Информация о магазине</div>
    </div>


</div>


<div class="modal fade" id="cart" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Окно корзины</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>К-во</th>
                        <th>Название</th>
                        <th>Цена</th>
                        <th class="text-xs-right">Итоговая цена</th>
                    </tr>
                    </thead>
                    <tbody id="output"> </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Продолжить покупки</button><a href="checkout.php" class="btn btn-primary">Проверить корзину</a></div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<script>
    var shopcart = [];
    $(document).ready(function() {
        outputCart();
        $(".productItem").click(function(e) {
            e.preventDefault();
            var iteminfo = $(this.dataset)[0];
            iteminfo.qty = 1;
            var itemincart = false;
            $.each(shopcart, function(index, value) {
                //console.log(index + '  ' + value.id);
                if (value.id == iteminfo.id) {
                    value.qty = parseInt(value.qty) + parseInt(iteminfo.qty);
                    itemincart = true;
                }
            })
            if (!itemincart) {
                shopcart.push(iteminfo);
            }
            sessionStorage["sca"] = JSON.stringify(shopcart);
            outputCart();
            ///
        })

        function outputCart() {
            if (sessionStorage["sca"] != null) {
                shopcart = JSON.parse(sessionStorage["sca"].toString());
                console.log(sessionStorage["sca"]);
                $('#checkoutdiv').show();
            }
            var holderHTML = '';
            var total = 0;
            var itemCnt = 0;
            $.each(shopcart, function(index, value) {
                console.log(value);
                var stotal = value.qty * value.price;
                total += stotal;
                itemCnt += parseInt(value.qty);
                holderHTML += '<tr><td>' + value.qty + '</td><td>#' + value.id + ' ' + value.name + '(' + value.s + ')</td><td> ' + formatMoney(value.price) + ' </td><td class="text-xs-right"> ' + formatMoney(stotal) + '</td></tr>';
            })
            holderHTML += '<tr><td colspan="3" class="text-xs-right">Total</td><td class="text-xs-right">' + formatMoney(total) + '</td></tr>';
            $('#output').html(holderHTML);
            $('.total').html(formatMoney(total));
            $('.items').html(itemCnt);
        }

        function formatMoney(n) {
            return '$' + (n / 100).toFixed(2);
        }
    })
</script>
</body>
</html>