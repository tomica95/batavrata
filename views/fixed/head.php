<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div id="stuck_container" class="stuck_container">
            <div class="container">
                <div class="brand">
                    <h1 class="brand_name">
                        <a href="index.php"><img src="images/logo.svg" alt="#"></a>
                    </h1>

                </div>

                <nav class="nav">
                    <ul class="sf-menu" data-type="navbar">
                        <li class="active">
                            <a href="index.php">Početna</a>
                        </li>
                        <?php 

                            require_once "models/categories/functions.php";

                            $categories = getAllCategories();

                            foreach($categories as $category):
                        
                        ?>
                        <li>
                            <a href="index.php?page=sigurnosna&catid=<?=$category->id?>"><?=$category->name?></a>

                        </li>
                            <?php endforeach;?>
                        <li>
                            <a href="index.php?page=contact">Kontakt</a>
                        </li>
                        <li>
                            <?php if(isset($_SESSION['user'])): ?>
                            <a href="models/auth/logout.php">Logout</a>
                            <?php endif; ?>
                            <?php if(!isset($_SESSION['user'])): ?>
                            <a href="index.php?page=login">Login</a>
                            <?php endif; ?>
                        </li>
                        <?php if(isset($_SESSION['user'])&&$_SESSION['user']->role_id==1):?>
                        <li>
                            <a href="admin/index.php">Admin panel</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>



            </div>
        </div>
    </header>