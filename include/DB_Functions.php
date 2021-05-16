<?php
include_once "DB_Connect.php";

class DB_Functions
{
    private $conn;


    public function __construct()
    {
        $db=new DB_Connect();
        $this->conn = $db->Connect();
    }


    public function addUser($login,$email,$pass)
    {
        $smts=$this->conn->prepare("INSERT INTO `users`(`login`, `email`, `password`) VALUES (?,?,?)");
        $smts->bind_param("sss",$login,$email,md5($pass));
        if($smts->execute()) return true;
        return false;
    }
    public function regUser($login,$pass)
    {
        $smts=$this->conn->prepare("SELECT `id_user`, `login`, `email`, `password` FROM `users` WHERE `login`=?");
        $smts->bind_param("s",$login);
        $smts->execute();
        $smts->bind_result($id_user, $name, $email, $password);
        $p="";
        while($smts->fetch()){
            $p=$password;
        }
        if($p==md5($pass))
            return true;
        return false;
    }

}