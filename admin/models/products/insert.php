<?php

if(isset($_POST['insert-product'])){

    require_once "../../../config/connection.php";
    require_once "product_functions.php";

    //working with product
    $product_name = $_POST['name'];

    $color = $_POST['color'];

    $width_plot = $_POST['debljina'];

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
    if(empty($width_plot)){
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

    // working with picture
    $file_name = $_FILES['picture']['name'];
    $tmp_Location = $_FILES['picture']['tmp_name'];
    $file_type = $_FILES['picture']['type'];
    $file_size = $_FILES['picture']['size'];



    $errors = [];

    $alow_types = ['image/jpg', 'image/jpeg', 'image/png'];

    if(!in_array($file_type, $alow_types)){
        array_push($errors, "Wrong type, try again");
    }
    if($file_size > 3000000){
        array_push($errors, "To heavy");
    }


    if(count($errors) == 0){


        // list($width, $height) = getimagesize($tmp_Location);



        $permanent_picture = null;
        switch($file_type){
            case 'image/jpeg':
                $permanent_picture = imagecreatefromjpeg($tmp_Location);
                break;
            case 'image/png':
                $permanent_picture = imagecreatefrompng($tmp_Location);
                break;
        }

        // $newWidth = 320;
        // $newHeight = ($newWidth/$width) * $height;
        // $newPicture = imagecreatetruecolor($newWidth, $newHeight);


        // imagecopyresampled($newPicture, $permanent_picture, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);


        $name = time().$file_name;
        $srcNewPicture = 'assets/img/small/'.$name;

        // switch($file_type){
        //     case 'image/jpeg':
        //         imagejpeg($newPicture,'../../../'.$srcNewPicture, 75);
        //         break;
        //     case 'image/png':
        //         imagepng($newPicture,'../../../'.$srcNewPicture);
        //         break;
        // }

        $srcOriginalPicture = 'assets/img/'.$name;

        if(move_uploaded_file($tmp_Location, '../../../'.$srcOriginalPicture)){


            try {
                insertProduct($product_name,$color,$width_plot,$dimension,$number_locks,$purchasetime,$description,$price,$category_id);
                $product_id = $conn->lastInsertId();
                $isInserted = insertPicture($srcOriginalPicture, $srcNewPicture,$product_id);

                if($isInserted){

                    header("Location:../../index.php?page=products");
                }

            } catch(PDOException $e){

                writeError($e->getMessage());

            }
        }


        imagedestroy($permanent_picture);


    } else {
        echo "<ul>";
        foreach($errors as $error)
        {
            echo "<li>".$error."</li>";
        }
    }
}

}
