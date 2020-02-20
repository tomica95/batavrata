<?php 

    session_start();

    require_once "config/connection.php";

    include "views/fixed/header.php";

    include "views/fixed/head.php";

    // content

    if(isset($_GET['page']))
    {
        switch($_GET['page']){
            case 'index':
            include "views/pages/main.php";
            break;

            case 'contact':
            include "views/pages/contact.php";
            break;

            case 'doors':
            include "views/pages/doors.php";
            break;

            case 'lux':
            include "views/pages/lux.php";
            break;

            case 'sobna':
            include "views/pages/sobna.php";
            break;

            case 'login':
                if (isset($_SESSION['user'])) {
                    header("Location:index.php");
                    exit;
                }
            include "views/pages/login.php";
            break;

            case 'product':
            include "views/pages/single.php";
            break;

        }
    }
    else
    {
        include "views/pages/main.php";
    }

    // endcontent

    include "views/fixed/footer.php";

?>