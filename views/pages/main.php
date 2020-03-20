<main>
    <section>
        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-src="images/slide_1.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="captionbg">
                                <h2>Bata Vrata</h2>

                                <p>Kod nas je sve za 24 sata,
                                a može i na nekoliko rata.</br></br></br>
                                060 55 33 529..</p></br></br></br>
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

                            $products = getAllProductsWithPictureAndCategory();
                            
                            foreach($products as $product_sigurnosna):
                        ?>
                   <div class="col-sm-4">
                   <div class="doors-img">
                            <a class="thumb top__767" href="<?=$product_sigurnosna->big?>" data-fancybox-group="1">
                                <img src="<?=$product_sigurnosna->big?>" alt=""/>

                                <!-- <span class="thumb_overlay"></span> -->

                            </a>
                            </div>
                                <p style="text-align:center">						
                                Cena: <b style="font-weight:bold;"><?=$product_sigurnosna->price ?> rsd</b></p>
                        </div>
                            <?php endforeach; ?>

                    
               </div>
                           
                    </div>

                    

                   
            


                </div>
            </div>
        </div>
    </section>

</main>