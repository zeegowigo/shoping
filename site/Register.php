<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="lockreg.ico" type="image/png">
</head>
<style>
    body{
        text-align: center;
    }
    #inputs input
    {
        width: 353px; /* 353 + 2 + 45 = 400 */
    }
    #inputs input:focus
    {
        background-color: #fff;
        border-color: #4d09fa;
        outline: none;
        -moz-box-shadow: 0 0 0 1px #4d09fa inset;
        -webkit-box-shadow: 0 0 0 1px #4d09fa inset;
        box-shadow: 0 0 0 1px #4d09fa inset;
    }
    #submit
    {
        background-color: #b621fe;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#1fd1f9), to(#b621fe));
        background-image: -webkit-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: -moz-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: -ms-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: -o-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: linear-gradient(top, #1fd1f9, #b621fe);

        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;

        text-shadow: 0 1px 0 rgba(255,255,255,0.5);

        -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
        -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;

        border-width: 1px;
        border-style: solid;
        border-color: #000000 #000000 #000000 #000000;

        float: left;
        height: 35px;
        padding: 0;
        width: 400px;
        cursor: pointer;
        font: bold 15px Arial, Helvetica;
        color: #000000;
    }

    #submit:hover,#submit:focus
    {
        background-color: #b621fe;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#1fd1f9), to(#b621fe));
        background-image: -webkit-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: -moz-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: -ms-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: -o-linear-gradient(top, #1fd1f9, #b621fe);
        background-image: linear-gradient(top, #1fd1f9, #b621fe);
    }
</style>
<body>
<form id="register" action="reg.php" method="post">
    <h1>Форма регистрации</h1>
    <fieldset id="inputs">
        <input name="username" type="text" placeholder="Логин" autofocus required>
        <input name="email" type="email" placeholder="email" autofocus required>
        <input name="password" type="password" placeholder="Пароль" required>
        <input name="password_repeat" type="password" placeholder="Повторите пароль" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Регистрация">
    </fieldset>
    <p>У вас уже есть аккаунт? -<a href="Login.php">Пожалуйста авторизуйтесь</a>!</p>
</form>
</body>
</html>

