<?php
include_once "../include/DB_Functions.php";
if(isset($_POST["username"])&&isset($_POST["email"])
    &&isset($_POST["password"])&&isset($_POST["password_repeat"]))
{
    if($_POST["password"]===$_POST["password_repeat"])
    {
        $db=new DB_Functions();
        if($db->addUser($_POST["username"],$_POST["email"],$_POST["password"])==true)
        {
            session_start();
            $_SESSION["site"]=$_POST["username"];
            $_SESSION["email"]=$_POST["email"];
            header("Location:index.php");
        }
        else
        {
            echo "Ошибка?";
        }
    }
    else
    {
        Header("Location:Register.php");
    }
}