<?php 

function getAllProductsWithPictureAndCategory()
{
    try{

    return executeQuery('SELECT *,p.id as productID,p.name as productName,c.name as categoryName FROM products p INNER JOIN pictures s ON p.id=s.product_id INNER JOIN categories c ON p.cat_id=c.id');
    }
    catch(PDOException $e){

        writeError($e->getMessage());
       
    }
    
}

function insertProduct($product_name,$color,$width,$dimension,$number_locks,$purchasetime,$description,$price,$category_id){

    try
    {
        global $conn;

        $insert = $conn->prepare("INSERT INTO products VALUES('',?,?,?,?,?,?,?,?,?)");

        $inserted = $insert->execute([
            $product_name,$color,$width,$dimension,$number_locks,$purchasetime,$description,$price,$category_id
        ]);
    }
    catch(PDOException $e){

        writeError($e->getMessage());
       
    }
    
}

function insertPicture($srcOriginalPicture, $srcNewPicture, $product_id){
    try{
    global $conn;
    $insert = $conn->prepare("INSERT INTO pictures VALUES('', ?, ?,?)");
    $isInserted = $insert->execute([$srcOriginalPicture, $srcNewPicture,$product_id]);
    return $isInserted;
    }
    catch(PDOException $e){

        writeError($e->getMessage());
       
    }
}

function deleteProduct($id)
{
    try{
        global $conn;

        $delete = $conn->prepare("DELETE FROM products WHERE id=?");

        $delete->execute([
            $id
            ]);

        }
        catch(Exception $e){
 
            writeError($e->getMessage());
        }
}

function deletePictureofProduct($id)
{
    try{
        global $conn;

        $delete = $conn->prepare("DELETE FROM pictures WHERE product_id=?");

        $delete->execute([
            $id
            ]);

        }
        catch(Exception $e){
 
            writeError($e->getMessage());
    }
}

function findProduct($id)
{
    global $conn;
    try
    {
        $product = $conn->prepare("SELECT *,p.id AS productID FROM products p JOIN pictures s ON p.id=s.product_id WHERE p.id=?");

        $product->execute([
            $id
        ]);

        $result = $product->fetch();

        return $result;
    }
    catch(PDOException $e){
         
        writeError($e->getMessage());
    }
}

function allCategories()
{
    try{

    return executeQuery("SELECT * FROM categories");

    }
    catch(PDOException $e){
         
        writeError($e->getMessage());
    }

}

function updateProduct($product_name,$color,$width,$dimension,$number_locks,$purchasetime,$description,$price,$category_id,$id)
{
    try
    {
        global $conn;
        
        $query = $conn->prepare("UPDATE products SET name=:name,color=:color,width=:width,dimension=:dim,number_locks=:num,purchasetime=:purch,description=:desc,price=:price,cat_id=:cat_id WHERE id=:id");

                $query->execute([
                    "name"=>$product_name,
                    "color"=>$color,
                    "width"=>$width,
                    "dim"=>$dimension,
                    "num"=>$number_locks,
                    "purch"=>$purchasetime,
                    "desc"=>$description,
                    "price"=>$price,
                    "cat_id"=>$category_id,
                    "id"=>$id
                ]);
                
    }
    catch(PDOException $e){
         
        writeError($e->getMessage());
    }
    
}

function updatePicture($srcOriginalPicture,$srcNewPicture,$id)
{
    try
    {
        global $conn; 
        
        $update = $conn->prepare("UPDATE pictures SET big=:big,small=:small WHERE product_id=:product_id");
                            
                            $update->execute([
                                "big"=>$srcOriginalPicture,
                                "small"=>$srcNewPicture,
                                "product_id"=>$id
                            ]);
    }
    catch(PDOException $e){
         
        writeError($e->getMessage());
    }
    
}


?>