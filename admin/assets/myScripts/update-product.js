$(document).ready(function(){

   $('.update-product').on('click',function(){
    
        let id= $(this).data('id');



        $.ajax({
            url:"models/products/update-product.php",
            method:"POST",
            data:
            {
                id
            },
            dataType:"json",
            success:function(data)
            {
                let html=`
        <form action="models/products/update.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                    <label for="username">Naziv proizvoda</label>
                    <input type="text" name="name"  tabindex="1" class="form-control" value="${data.product.name}">
                  </div>
                  <div class="form-group">
                    <label for="username">Boja</label>
                    <input type="text" name="color" tabindex="2" class="form-control" value="${data.product.color}">
                  </div>
                  <div class="form-group">
                    <label for="password">Debljina plota</label>
                    <input type="text" name="width" tabindex="2" class="form-control"  value="${data.product.width}">
                  </div>
                  <div class="form-group">
                    <label for="confirm-password">Dimenzije vrata</label>
                    <input type="text" name="dimension"  tabindex="2" class="form-control"  value="${data.product.dimension}">
                  </div>
                  <div class="form-group">
                    <label for="username">Broj brava</label>
                    <input type="text" name="number_locks"  tabindex="1" class="form-control" value="${data.product.number_locks}">
                  </div>

                  <div class="form-group">
                    <label for="username">Rok isporuke</label>
                    <input type="text" name="purchasetime"  tabindex="1" class="form-control" value="${data.product.purchasetime}">
                  </div>

                  <div class="form-group">
                    <label for="username">Opis proizvoda</label>
                    <input type="text" name="description"  tabindex="1" class="form-control" value="${data.product.description}">
                  </div>

                  <div class="form-group">
                    <label for="username">Cena proizvoda</label>
                    <input type="text" name="price"  tabindex="1" class="form-control" value="${data.product.price}">
                  </div>


                  <input type="hidden" name="id" value="${data.product.productID}">

                  <input type="hidden" name="category_id" value="${data.product.cat_id}">

                  <div class="input-field">
                    <img src="../${data.product.small}" width="80" height="60">
                  
                  </div>

                  <div class="input-field">
                          <button type="button" onclick="document.getElementById('productPicture').click()" class="btn btn-info">Add picture to product</button>
                          <span id="productPictureValue"></span>

                          <input type="file" name="picture" id="productPicture" style="display:none;" onchange="document.getElementById('productPictureValue').innerHTML=this.value;"/>
                        </div>
                        </br><hr>
                        <div class="input-field">
                            <input type="submit" value="Sacuvaj izmene" name="update-product" class="btn btn-success"/>
                        </div> 

                        
                      </form>`;

                      $('.edit-product').html(html);


            },
            error:function(error){
                alert(error);
            }
        })

   })

   

 
})