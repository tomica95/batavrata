<?php 

     function getAllCategories(){
        try{
        return executeQuery("SELECT * FROM categories WHERE parent_id IS NULL");
        }
        catch(PDOException $e){
         
            handle($e->getMessage());
        }
    }
    function getAllCategoriesWithChildren(){
        try{
                return executeQuery("SELECT * FROM categories");
        }
        catch(PDOException $e){

            handle($e->getMessage());
        }
    }



?>