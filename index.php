<?php
session_start();
if(isset($_SESSION["site"]))
    header("Location:site/index.php");
else
    header("Location:site/Login.php");