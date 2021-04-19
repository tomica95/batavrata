<?php

session_start();

if(isset($_SESSION['user'])&&$_SESSION['user']->role_id=="1")
{
    if(isset($_POST['update-product']))
    {
        require_once "../../../config/connection.php";

        require_once "product_functions.php";

        $id = $_POST['id'];

        $product_name = $_POST['name'];

        $color = $_POST['color'];

        $width = $_POST['width'];

        $dimension = $_POST['dimension'];

        $number_locks = $_POST['number_locks'];

        $purchasetime = $_POST['purchasetime'];

        $description = $_POST['description'];

        $price = $_POST['price'];

        $category_id = $_POST['category_id'];

        // $date = date("Y-m-d H:i:s");

        $greske = [];

        if(empty($product_name)){
            $greske[]="Molim Vas unesite naziv proizvoda";
        }
        if(empty($color)){
            $greske[]="Molim vas unesite boju proizvoda";
        }
        // else if(!is_numeric($code))
        // {
        //     $greske[]="Code must be number";
        // }
        if(empty($width)){
            $greske[]="Molim Vas unesite sirinu plota";
        }
        if(empty($dimension)){
            $greske[]="Molim Vas unesite dimenzije proizvoda";
        }
        // else if(!is_numeric($price))
        // {
        //     $greske[]="Your price must be number";
        // }
        if(empty($number_locks)){
            $greske[]="Molim Vas unesite broj brava";
        }

        if(empty($purchasetime))
        {
            $greske[]="Molim Vas unesite rok isporuke";
        }

        if(empty($description))
        {
            $greske[]="Molim Vas unesite opis proizvoda";
        }

        if(empty($price))
        {
            $greske[]="Molim Vas unesite cenu proizvoda";
        }

        if(!is_numeric($category_id))
        {
            $greske[]="Morate uneti kategoriju";
        }
        if(count($greske)>0){
            echo "<ul>";
            foreach($greske as $error){
                echo "<li>".$error."</li>";
            }
            echo "</ul>";
        }
        else
        {

                if(empty($_FILES['picture']['name']))
                {

                    updateProduct($product_name,$color,$width,$dimension,$number_locks,$purchasetime,$description,$price,$category_id,$id);
                    header('Location:../../index.php?page=products');
                }


                $file_name = $_FILES['picture']['name'];
                $tmp_Location = $_FILES['picture']['tmp_name'];
                $file_type = $_FILES['picture']['type'];
                $file_size = $_FILES['picture']['size'];



                $errors = [];

                $alow_types = ['image/jpg', 'image/jpeg', 'image/png'];

                if(!in_array($file_type, $alow_types)){
                    array_push($errors, "Wrong type");
                }
                if($file_size > 3000000){
                    array_push($errors, "To heavy");
                }


                if(count($errors) == 0){

                    $permanent_picture = null;
                    switch($file_type){
                        case 'image/jpeg':
                            $permanent_picture = imagecreatefromjpeg($tmp_Location);
                            break;
                        case 'image/png':
                            $permanent_picture = imagecreatefrompng($tmp_Location);
                            break;
                    }



                    $name = time().$file_name;
                    $srcNewPicture = 'assets/img/'.$name;
                    $srcOriginalPicture = 'assets/img/'.$name;

                    if(move_uploaded_file($tmp_Location, '../../../'.$srcOriginalPicture)){


                        updateProduct($product_name,$color,$width,$dimension,$number_locks,$purchasetime,$description,$price,$category_id,$id);

                        updatePicture($srcNewPicture,$srcNewPicture,$id);

                    }


                    imagedestroy($permanent_picture);

                }



            header('Location:../../index.php?page=products');
    }
}
}

?>
