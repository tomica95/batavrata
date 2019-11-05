<main>

           <section class="well">
               <h3>Sigurnosna Vrata - Beograd</h3>
               <p style="text-align: center;margin-bottom: 50px; font-family: "PT Sans Narrow", sans-serif;">Obezbedite sebe i svoju porodicu uz najnovije modele sigurnosnih Bata Vrata. <b style="font-weight: bold;"> Isporuka i ugranja za 24h.</b></p>

               <div class="container">
               <?php 
                            require_once "models/products/functions.php";

                            $id = $_GET['catid'];

                            $products = getAllProductsByCategoryId($id);
                            
                            foreach($products as $product):
                        ?>
                   <div class="row">
                       <div class="col-sm-4">
                           <a href="index.php?page=product&id=<?=$product->productID?>">
                               <img src="<?=$product->big?>" alt=""/>

                           </a>
                            <p style="text-align:center">		 Naziv:<?=$product->name?></br>				
                             Cena: <b style="font-weight:bold;"><?=$product->price?> rsd</b></p>
                       </div>
                       <?php endforeach; ?>
                        
                   </div>
               </div>

           </section>
           </main>