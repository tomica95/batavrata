$(document).ready(function(){

    $('.update-category').on('click',function(){

        let id = $(this).data('id');

        $.ajax({
            url:"models/categories/update-category.php",
            method:"POST",
            dataType:"JSON",
            data:{
                id
            },
            success:function(data)
            {
                console.log(data);
                let html = `<div class="card">
                <div class="card-header">
                    <strong>Upate category : ${data.category.name}</strong>
                </div>
                <div class="card-body card-block">
                    <form action="models/categories/update.php" method="post" class="">
                        <div class="form-group">
                        <label for="nf-email" class=" form-control-label">Naziv kategorije</label><input type="text" id="nf-email" name="category" value="${data.category.name}" class="form-control"></div>
                        <label for="nf-email" class=" form-control-label">Naziv parent kategorije</label>
                            <select name="parent_id">
                            `;
                html += `<option value="">Nema nadkategoriju</option>`;

                var isChecked;
                for(let category of data['allCategories'])
                {
                        isChecked = category.id == data.category.parent_id ? "selected" : " ";
                    console.log(isChecked);
                        html += `<option value="${category.id}" ${isChecked}>${category.name} </option>`;
                }

                html+=`
                            </select>
                        </div>
                        <input type="hidden" value="${data['category'].id}" name="id">
                        <button type="submit" name="update-category" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Sacuvaj izmene
                    </button>
                    </form>
                </div>
               
            </div>`;

                $('#category-update').html(html);
            },
            error:function(error){
                
                console.log(error);
            }
        })

    })



})