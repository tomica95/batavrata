<?php 
    require_once "models/categories/category_functions.php";

    $allCategories = getAllCategories();
?>
<div class="card">
    <div class="card-header">
        <strong>Unesite novu kategoriju</strong>
    </div>
    <div class="card-body card-block">
        <form action="models/categories/insert.php" method="post" class="">
            <div class="form-group">
            <label for="nf-email" class=" form-control-label">Kategorija</label><input type="text" id="nf-email" name="category" placeholder="Enter category" class="form-control"></div>
            
            <div class="form-group">
            <label for="nf-email" class=" form-control-label">Nadkategorija</label>

            <select name="parent_id">
                <option>Nema nadkategoriju</option>
                <?php foreach ($allCategories as $category): ?>
                    <option value="<?=$category->id?>"><?=$category->name?></option>
                <?php endforeach; ?>
            </select>
            
            </div>


            <button type="submit" name="insert-category" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Unesite kategoriju
        </button>
        </form>
    </div>
    
</div>