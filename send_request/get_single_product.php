<?php
/**
 * Get a Single Product in API 
 *
 */

$product = json_decode(file_get_contents('http://dummyjson.com/products/1'));

?>

<p>ID: <?=$product->id ?> </p>
<p>Product Title: <?=$product->title ?> </p>
<p>Description: <?=$product->description ?> </p>
<p>Price: <?=$product->price ?> </p>
<p>Brand : <?=$product->brand ?> </p>

<img src="<?=$product->thumbnail?>">

<img src="<?=$product->images[0]?>">
<img src="<?=$product->images[1]?>">
<img src="<?=$product->images[2]?>">
<img src="<?=$product->images[3]?>">