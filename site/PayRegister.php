<title>Обработка заказа</title>
<style>
    body {
        background: #e0e5ec;
    }
    h1 {
        position: relative;
        text-align: center;
        color: #353535;
        font-size: 50px;
        font-family: "Cormorant Garamond", serif;
    }
    .frame {
        width: 90%;
        margin: 40px auto;
        text-align: center;
    }
    button {
        margin: 20px;
    }
    .custom-btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
        7px 7px 20px 0px rgba(0,0,0,.1),
        4px 4px 5px 0px rgba(0,0,0,.1);
        outline: none;
    }

    .btn-9 {
        border: none;
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .btn-9:after {
        position: absolute;
        content: " ";
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #1fd1f9;
        background-image: linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%);
        transition: all 0.3s ease;
    }
    .btn-9:hover {
        background: transparent;
        box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
        -4px -4px 6px 0 rgba(116, 125, 136, .2),
        inset -4px -4px 6px 0 rgba(255,255,255,.5),
        inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
        color: #fff;
    }
    .btn-9:hover:after {
        -webkit-transform: scale(2) rotate(180deg);
        transform: scale(2) rotate(180deg);
        box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
        -4px -4px 6px 0 rgba(116, 125, 136, .2),
        inset -4px -4px 6px 0 rgba(255,255,255,.5),
        inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
    }



    .load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
        width:100px;
        height:100px;
    }
    .load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}

    .load :first-child{background: linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%);animation-delay:-1.5s}
    .load :nth-child(2){background: linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%);animation-delay:-1s}
    .load :nth-child(3){background: linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%);animation-delay:-0.5s}
    .load :last-child{background: linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%)
    }

    @keyframes spin{
        0%,100%{transform:translate(0)}
        25%{transform:translate(160%)}
        50%{transform:translate(160%, 160%)}
        75%{transform:translate(0, 160%)}
    }


</style>

<div class="DonesZ">
    <h1>Ваш заказ принят на обрабатку.<br> Пожалуйста дождитесь ответа по почте!</h1>
</div>


<div class="load">
    <hr/><hr/><hr/><hr/>
</div>

<form method="post" action="index.php">
<div class="frame">
    <button class="custom-btn btn-9">Главная</button>
</div>
</form>
