<?php 
    function allProductsFromSigurnosnaVrata()
    {
        global $conn;

        try{

            $products = $conn->prepare("SELECT *,p.id as productID,p.name as productName FROM products p INNER JOIN pictures s ON p.id=s.product_id INNER JOIN categories c ON p.cat_id=c.id WHERE cat_id=1");

            $products->execute([
            ]);
    
            $result = $products->fetchAll();

            return $result;

        }
        catch(PDOException $e){

            writeError($e->getMessage());
           
        }
    }
    function getAllProductsByCategoryId($id)
    {
        global $conn;

        try{

            $products = $conn->prepare("SELECT *,p.id as productID,p.name as productName,c.name as categoryName FROM products p INNER JOIN pictures s ON p.id=s.product_id INNER JOIN categories c ON p.cat_id=c.id WHERE cat_id=?");

            $products->execute([
                $id
            ]);

            $result = $products->fetchAll();

            return $result;

        }
        catch(PDOException $e){

            writeError($e->getMessage());

        }
    }
    function getAllCategoriesByParentId($id)
    {
        global $conn;

        try{

            $products = $conn->prepare("SELECT * FROM categories WHERE parent_id = ?");

            $products->execute([
                $id
            ]);

            $result = $products->fetchAll();

            return $result;

        }
        catch(PDOException $e){

            writeError($e->getMessage());

        }
    }

    function findProductById($id){

    global $conn;
    try
    {
        $product = $conn->prepare("SELECT *,p.id AS productID,p.name as productName FROM products p JOIN pictures s ON p.id=s.product_id WHERE p.id=?");

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

    function getCategoryById($id)
    {
        global $conn;

        try{

            $products = $conn->prepare("SELECT * FROM categories WHERE id = ?");

            $products->execute([
                $id
            ]);

            $result = $products->fetch();

            return $result;

        }
        catch(PDOException $e){

            writeError($e->getMessage());

        }
    }

?>