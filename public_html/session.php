<?php

require('config.php');

$errors = array('username'=>'','password'=>'');

if(isset($_POST['submit'])){
    if(empty($_POST['username'])){
        $errors['username'] = "Username cannot be empty";
    }else if(empty($_POST['password'])){
        $errors['password'] = "Password cannot be empty";
    }else {
        $username = $_POST['username'];
        $password = $_POST['password'];

    }

    //Database Managment
    if(!array_filter($errors)){

        try{
            $connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
            $db = new PDO($connection_string,$dbuser,$dbpass);


            $stmt = $db->prepare("SELECT * FROM Users WHERE username = :username");
            $r = $stmt->execute(array(":username"=>$username));
            $userresult = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount() < 1){
                $errors['username'] = "No account associated with that email";
            }else{

            }

            echo "SELECT user result: ".var_export($userresult, true)."<br/>";

        }catch(Exception $e){
            echo "Connection failed = ".$e->getMessage();
        }
    }
}

?>