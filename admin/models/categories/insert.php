<?php 
    session_start();

    require_once "../../../config/connection.php";
    require_once "category_functions.php";

    if(isset($_SESSION['user'])&&$_SESSION['user']->role_id=="1")
    {
        if(isset($_POST['insert-category']))
        {
            $name = $_POST['category'];
            $parent_id = $_POST['parent_id'];

            $greske = [];

            if(empty($name)){
                $greske[]="Enter the category name";
            }
            if(count($greske)>0)
            {
                foreach($greske as $greska)
                {
                    echo $greska;
                }
            }
            else
            {
                insertCategory($name, $parent_id);

                header("Location:../../index.php?page=categories");
            }
        }    
    }

?>