<?php
    session_start();
       
        
    require_once "../../config/connection.php";
    require_once "auth_functions.php";


    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $user = findUser($email,$password);
        
        if($user)
        {
            
            $_SESSION['user'] = $user;
            $id_user = $_SESSION['user']->id;
            userLogged($id_user);
            header('Location:../../index.php');
        }
        else
        {
            echo "not successfull";
            
        }
    }
    
?>