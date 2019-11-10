<main>

           <section class="well">
               <h3>Sigurnosna Vrata - Beograd</h3>
               <p style="text-align: center;margin-bottom: 50px; font-family: "PT Sans Narrow", sans-serif;">Obezbedite sebe i svoju porodicu uz najnovije modele sigurnosnih Bata Vrata. <b style="font-weight: bold;"> Isporuka i ugranja za 24h.</b></p>

               <div class="container">
               <div class="row">
               <?php 
                            require_once "models/products/functions.php";

                            $id = $_GET['catid'];

                            $products = getAllProductsByCategoryId($id);
                            
                            foreach($products as $product):
                        ?>
                  
                   <div class="col-sm-4">
                
                        <div class="doors-img">
                           <a class="thumb top__767" href="index.php?page=product&id=<?=$product->productID?>">
                               <img src="<?=$product->big?>" alt=""/>

                           </a>
                            </div>
                            <div class="doors-text">
                            <p style="text-align:center">		 Naziv:<?=$product->productName?></br>				
                             Cena: <b style="font-weight:bold;"><?=$product->price?> rsd</b>
                            </div>
                       </div>
                  
                       <?php endforeach; ?>
                        
                   
                </div>
               </div>

           </section>
           </main>