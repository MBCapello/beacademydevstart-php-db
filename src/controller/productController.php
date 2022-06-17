<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ProductController extends AbstractController {
    public function listAction(): void 
    {
        $con = Connection::getConnection();
        $result = $con->prepare('SELECT * FROM tb_products');
        if($result){
            $result->execute();
        }

        parent::render('product/list', $result);
    }

    public function addAction(): void 
    {
        
        $con = Connection::getConnection();
        $result = $con->prepare("SELECT * FROM tb_category;");
        $result->execute();
        
        if ($_POST) {
            extract($_POST);
            $con = Connection::getConnection();
            $createAt = date('Y-m-d H:i:s');
            
            $resultPost = $con->prepare("INSERT INTO tb_products (name, brand, description, price, photo, quantity, category_id, create_at) VALUES (
                '{$name}', '{$brand}', '{$description}', {$price}, '{$photo}', '{$quantity}', '{$category_id}', '{$createAt}');");
           
            $resultPost->execute();

            if($resultPost->rowCount() > 0) {
                parent::render('product/addConfirm', $result);
                exit;
            }
        }

        parent::render('product/add', $result);
    }

    public function editAction(): void 
    {
        
        $con = Connection::getConnection();

        $categories = $con->prepare("SELECT * FROM tb_category;");
        $categories->execute();

        $result = $con->prepare("SELECT * FROM tb_products WHERE id = {$_GET['id']};");
        
        $result->execute();


        
        $id = $_GET["id"];
        
        $con = Connection::getConnection();
        
        if($_POST){
            extract($_POST);

            $result = $con->prepare("UPDATE tb_products SET name ='{$name}', description = '{$description}', brand = '{$brand}', quantity = '{$quantity}', price = '{$price}', photo = '{$photo}' WHERE id = '{$id}';"); 
            $result->execute();
            
            if($result->rowCount() > 0) {
                parent::render('product/addConfirm', $result);
                exit;
            }else {
                ProductController::listAction();
            }
        }
        parent::render('product/edit', [
        
        'product'=>$result->fetch(\PDO::FETCH_ASSOC),
            'categories'=>$categories
        ]);
    }

    public function deleteAction(): void
    {
        $con = Connection::getConnection();
        $result = $con->prepare("DELETE FROM tb_products WHERE id = {$_GET['id']};");
        $result->execute();
        ProductController::listAction();
    }
}