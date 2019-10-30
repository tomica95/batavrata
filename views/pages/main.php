<main>
    <section>
        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-src="images/slide_1.jpg">
                    <div class="camera_caption fadeIn">
                        <div class="container">
                            <div class="captionbg">
                                <h2>Obezbedite se na vreme!</h2>

                                <p>Najbolji način da zaštitite sebe i svoju porodicu jeste da ugradite
                                  sigurnosna protivprovalna vrata. Ova vrata ne samo da će Vas sačuvati od
                                  provalnika, već će i svojim dizajnom ulepšati ulaz u Vaš dom.</p>
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
            <h3>Izdvajamo iz ponude</h3>

            <div class="resp-tabs" style="text-align: center;" id="tab-">
                <ul class="resp-tabs-list">
                    <li>Sigurnosna Vrata</li>
               
                </ul>
                <div class="resp-tabs-container">

                    <div>
                       <div class="row">
                       <?php 
                            require_once "models/products/functions.php";

                            $products_sigurnosna = allProductsFromSigurnosnaVrata();
                            
                            foreach($products_sigurnosna as $product_sigurnosna):
                        ?>
                   <div class="col-sm-4">
                            <a class="thumb top__767" href="images/sigurnosnavrata1.jpg" data-fancybox-group="1">
                                <img src="<?=$product_sigurnosna->big?>" alt=""/>

                                <span class="thumb_overlay"></span>

                            </a>
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