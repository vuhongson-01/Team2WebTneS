<?php
include_once("model/Model.php");
class Controller{
    public function __construct()  {  
    } 

    public function __invoke(){
        if (isset($_GET["product-detail-id"])){
            include 'view/product-detail.php';
        }
        else if (!isset($_GET["dest"])){
            include 'view/home.php';
        }
        else{
            echo '<div class="product-view">';
            include_once('view/list-tag.php');

            if ($_GET["dest"] == 'product'){
                include 'view/product.php';
            }
            else if ($_GET["dest"] == 'men'){
                include 'view/men.php';
            }
            else if ($_GET["dest"] == 'woman'){
                include 'view/woman.php';
            }            
            echo '</div>'; 
        }

    }
}
?>