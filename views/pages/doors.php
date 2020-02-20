<?php
    require_once "models/products/functions.php";

    $id = $_GET['catid'];
    $category = getCategoryById($id); //za meni

?>

<main>

           <section class="well">
               <h3><?=$category->name?> - Beograd</h3>
               <p style="text-align: center;margin-bottom: 50px; font-family: "PT Sans Narrow", sans-serif;">Obezbedite sebe i svoju porodicu uz najnovije modele Bata Vrata. <b style="font-weight: bold;"> Isporuka i ugranja za 24h.</b></p>

               <div class="container">

               <?php




                            $categoriesByParentId = getAllCategoriesByParentId($id);
                            if(count($categoriesByParentId)>0):
                            $categories = [];
                            foreach ($categoriesByParentId as $category)
                            {
                                $categories[$category->name] = getAllProductsByCategoryId($category->id);
                            }

                            foreach($categories as $category => $products):
                                echo '<div class="row doors-by-category">';
                                echo "<h1>$category</h1>";
                            foreach ($products as $product):
                        ?>


                   <div class="col-sm-4">

                        <div class="doors-img">
                           <a class="thumb top__767" href="index.php?page=product&id=<?=$product->productID?>">
                               <img src="<?=$product->big?>" alt=""/>

                           </a>
                            </div>
                            <div class="doors-text">
                                <p style="text-align:center"> Naziv:<?=$product->productName?></br>
                                Cena: <b style="font-weight:bold;"><?=$product->price?></b></p>
                            </div>
                   </div>

                       <?php endforeach; echo '</div>'; endforeach; else: ?>
                       <?php
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
                                   <p style="text-align:center"> Naziv:<?=$product->productName?></br>
                                   Cena: <b style="font-weight:bold;"><?=$product->price?></b></p>
                               </div>
                           </div>
                           <?php endforeach; endif;?>
                   
                </div>
               </div>

           </section>
           </main>