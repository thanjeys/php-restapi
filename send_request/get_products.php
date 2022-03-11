<?php
/**
 * Get a Single Product in API 
 *
 */

$products = json_decode(file_get_contents('https://fakestoreapi.com/products'));

echo "<pre>";
// var_dump($products);
echo "</pre>";


foreach($products as $product) { 
?>

<p>ID: <?=$product->id ?> </p>
<p>Product Title: <?=$product->title ?> </p>
<p>Description: <?=$product->description ?> </p>
<p>Price: <?=$product->price ?> </p>


<img src="<?=$product->image?>">



<?php
    } 
?>
