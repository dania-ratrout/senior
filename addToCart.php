<?php
session_start();
require_once('./Products.php');
echo $productID=$_GET['id'];
$product = $products[$productID] ;

if(isset($_SESSION['cart'])){
    array_push($_SESSION['cart'], $product);
}else{
    $_SESSION['cart']=array();
    array_push($_SESSION['cart'], $product);
}

echo '<pre>';
print_r($product);
echo '</pre>';

?>