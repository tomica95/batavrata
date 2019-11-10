<h2>Unesite novi proizvod</h2>
                        <form action="models/products/insert.php" method="POST" enctype="multipart/form-data">

                        

                        <p style="color: #9e9e9e;font-size: 12px;font-weight:400;">Izaberite kategoriju:</p>
                  <select name="category_id">

                    
                    <?php 
                    require_once "models/categories/category_functions.php";

                    $categories = getAllCategories();
                    
                    foreach($categories as $category): ?>
                    <option value="<?=$category->id?>"><?=$category->name?></option>
                    <?php endforeach; ?>

                    </select>

                    <div class="form-group">
                    <label for="username">Naziv proizvoda</label>
                    <input type="text" name="name"  tabindex="1" class="form-control" placeholder="Naziv proizvoda" value="">
                    </div>

                    <div class="form-group">
                    <label for="username">Boja</label>
                    <input type="text" name="color"  tabindex="1" class="form-control" placeholder="Boja" value="">
                    </div>

                  <div class="form-group">
                    <label for="confirm-password">Debljina plota</label>
                    <input type="text" name="debljina"  tabindex="2" class="form-control" placeholder="Debljina plota">
                  </div>

                  <div class="form-group">
                    <label for="password">Dimenzije</label>
                    <input type="text" name="dimension" tabindex="2" class="form-control" placeholder="Dimenzije">
                  </div>

                    <div class="form-group">
                    <label for="username">Broj brava</label>
                    <input type="text" name="number_locks"  tabindex="1" class="form-control" placeholder="Broj brava" value="">
                    </div>

                    <div class="form-group">
                    <label for="username">Rok isporuke</label>
                    <input type="text" name="purchasetime"  tabindex="1" class="form-control" placeholder="Rok isporuke" value="">
                    </div>

                    <div class="form-group">
                    <label for="username">Opis</label>
                    <input type="text" name="description"  tabindex="1" class="form-control" placeholder="Opis" value="">
                    </div>

                    <div class="form-group">
                    <label for="username">Cena</label>
                    <input type="text" name="price"  tabindex="1" class="form-control" placeholder="Cena" value="">
                    </div>
                  

                        <div class="input-field">
                          <button type="button" onclick="document.getElementById('productPicture').click()" class="btn btn-info">Dodajte sliku proizvodu</button>
                          <span id="productPictureValue"></span>

                          <input type="file" name="picture" id="productPicture" style="display:none;" onchange="document.getElementById('productPictureValue').innerHTML=this.value;"/>
                        </div>

                        <div class="input-field">
                            <input type="submit" value="Unesite proizvod" name="insert-product" class="btn btn-success"/>
                        </div> 


                        
                      </form>
                      </br>