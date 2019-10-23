<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Products</strong>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Naziv proizvoda</th>
                                    <th scope="col">Boja</th>
                                    <th scope="col">Debljina plota</th>
                                    <th scope="col">Dimenzija</th>
                                    <th scope="col">Broj brava</th>
                                    <th scope="col">Rok isporuke</th>
                                    <th scope="col">Opis</th>
                                    <th scope="col">Cena</th>
                                    <th scope="col">Vrsta proizvoda</th>
                                    <th scope="col">Slika</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                require_once "models/products/product_functions.php";
                                
                                $products = getAllProductsWithPictureAndCategory();

                                foreach($products as $product):
                            ?>
                                <tr>
                                    <th scope="row"><?=$product->productID?></th>
                                    <td><?=$product->productName?></td>
                                    <td><?=$product->color?></td>
                                    <td><?=$product->width?></td>
                                    <td><?=$product->dimension?></td>
                                    <td><?=$product->number_locks?>
                                    <td><?=$product->purchasetime?></td>
                                    <td><?=$product->description?></td>
                                    <td><?=$product->price?></td>
                                    <td><?=$product->categoryName?></td>
                                    <td><img src="../<?=$product->small?>" width="50" height="50"></td>
                                    <td><?=$product->categoryName?></td>
                                    <td>
                                    <button type="submit" class="btn btn-primary btn-sm update-product" data-id="<?=$product->productID?>">
                                     <i class="fa fa-dot-circle-o"></i> Update
                                    </button>
                                    </td>
                                    <td>
                                    <form method="POST" action="models/products/delete.php">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Delete
                                    </button>
                                    <input type="hidden" name="id" value="<?=$product->productID?>">
                                    </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                       
                    </div>
                    
                </div>
                <div id="product-update"></div>
            </div>

            </div>
    </div><!-- .animated -->
</div>