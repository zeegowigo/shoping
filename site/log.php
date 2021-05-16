<?php
include_once "../include/DB_Functions.php";
if(isset($_POST["username"])&&isset($_POST["password"]))
{
    $db=new DB_Functions();
    if($db->regUser($_POST["username"],$_POST["password"])==true)
    {
        session_start();
        $_SESSION["site"]=$_POST["username"];
        $_SESSION["email"]=$_POST["email"];
        header("Location:index.php");
    }
    else
    {
        header("Location:error.php");
    }

}