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
                        <li>
                            <a href="index.php?page=sigurnosna">Sigurnosna vrata</a>

                        </li>
                        <li>
                            <a href="index.php?page=lux">Lux sigurnosna</a>
                        </li>
                        <li>
                            <a href="index.php?page=sobna">Sobna vrata</a>
                        </li>
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
                    </ul>
                </nav>



            </div>
        </div>
    </header>