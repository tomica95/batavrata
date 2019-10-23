<?php 

    session_start();

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

            case 'sigurnosna':
            include "views/pages/sigurnosna.php";
            break;

            case 'lux':
            include "views/pages/lux.php";
            break;

            case 'sobna':
            include "views/pages/sobna.php";
            break;

            case 'login':
            include "views/pages/login.php";

        }
    }
    else
    {
        include "views/pages/main.php";
    }

    // endcontent

    include "views/fixed/footer.php";

?>