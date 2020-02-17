<?php 
function getAllCategories()
{
    return executeQuery("SELECT * FROM categories");
}

function deleteCategory($id)
{
    try{
        global $conn;

        $delete = $conn->prepare("DELETE FROM categories WHERE id=?");

        $delete->execute([$id]);
        }
        catch(Exception $e){
 
            writeError($e->getMessage());
        }
}

function insertCategory($name)
{
        try
        {
            global $conn;
            
            $query = $conn->prepare("INSERT INTO categories VALUES ('',?)");

            $query->execute([
                $name
            ]);
    
        }
        catch(Exception $e){
 
            writeError($e->getMessage());
        }
    
}

function findCategory($id)
{
    global $conn;
    try
    {
        $category = $conn->prepare("SELECT * FROM categories WHERE id=?");

        $category->execute([
            $id
        ]);

        $result = $category->fetch();

        return $result;
    }
    catch(PDOException $e){
         
        writeError($e->getMessage());
    }
}

function updateCategory($id,$name,$parent_id)
{
    global $conn;

    try
    {
        $update = $conn->prepare("UPDATE categories SET name=:name,parent_id=:parent WHERE id=:id");

        $update->execute([
            "name"=>$name,
            "id"=>$id,
            "parent"=>$parent_id
        ]);
    }
    catch(PDOException $e){
         
        writeError($e->getMessage());
    }
}


?>