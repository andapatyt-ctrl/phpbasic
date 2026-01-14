<?php

$xml = simplexml_load_file('product.xml');

?>

<h3>Product List</h3>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
     <?php foreach ($data as $item) { ?>
    <tr>
        <td><?php echo $product->name; ?></td>
        <td><?php echo $product->price; ?></td>
    </tr>
    <?php } ?>
</table>
