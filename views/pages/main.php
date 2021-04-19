<main>
    <section>
        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-src="images/slide_1.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="captionbg">
                                <h2>Bata Vrata</h2>

                                <p><h4>Kod nas je sve za 24 sata,
                                a može i na nekoliko rata.</h4></p>
                                <h3><a href="tel:060/55-33-529">060/55-33-529</a></h3></br>
                                <a class="btn" href="index.php?page=sigurnosna">Pogledajte naš katalog</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-src="images/slide_2.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="captionbg">
                                <h2>Sobna vrata za bolji enterijer</h2>

                                <p>Sobna vrata su veoma bitan faktor prilikom dizajniranja enterijera, pa je zato
                                vrlo važno napraviti pravi izbor i omogućiti sebi i svojoj porodici ugodan ambijent.</p>
                                <a class="btn" href="sobna-vrata.html">Pogledajte naš katalog</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
    <section class="well_1 bg_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 resp-margin">
                    <a href="#" class="fa fa-clock-o"></a>
                    <h4>Isporuka i ugradnja za 24h</h4>
                </div>
                <div class="col-lg-4 resp-margin">
                    <a href="#" class="fa fa-money"></a>
                    <h4>Povoljna cena</h4>
                </div>
                <div class="col-lg-4 resp-margin">
                    <a href="#" class="fa fa-check-square-o"></a>
                    <h4>Kvalitetna izrada</h4></div>

            </div>
        </div>
    </section>
    <section class="well">
        <div class="container">
            <h3>Celokupna ponuda</h3>

            <div class="resp-tabs" style="text-align: center;" id="tab-">
                <!-- <ul class="resp-tabs-list">
                    <li>Sigurnosna Vrata</li>
               
                </ul> -->
                <div class="resp-tabs-container">

                    <div>
                       <div class="row">
                       <?php 
                            require_once "models/products/functions.php";

                            $categories = getAllCategoriesWithChildren();

                            $categoriesAll = [];
                           foreach ($categories as $category)
                           {
                               $categoriesAll[$category->name] = getAllProductsByCategoryId($category->id);
                           }
                       foreach($categoriesAll as $category => $products):
                       echo '<div class="row doors-by-category">';
                       if($category=="Sigurnosna vrata"):
                       echo "<h1>".$category."</h1>";
                       elseif($category=="Sobna vrata"):
                       echo "<h1>".$category."</h1>";
                       endif;
                       foreach ($products as $product):
                        ?>
                   <div class="col-sm-4">
                   <div class="doors-img">
                            <a class="thumb top__767" href="index.php?page=product&id=<?=$product->productID?>">
                                <img src="<?=$product->big?>" alt="<?=$product->name?>"/>

                                <!-- <span class="thumb_overlay"></span> -->

                            </a>
                            </div>
                                <p style="text-align:center"> Naziv:<?=$product->productName?></br>
                                Cena: <b style="font-weight:bold;"><?=$product->price ?> rsd</b></p>
                       <a href="index.php?page=product&id=<?=$product->productID?>"><button class="dugme">Pogledajte više...</button></a>
                        </div>
                           <?php endforeach; echo '</div>'; endforeach;?>
                    
               </div>
                           
                    </div>

                    

                   
            


                </div>
            </div>
        </div>
    </section>

</main>