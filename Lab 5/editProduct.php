<?php

require_once 'controller/productInfo.php';
$product = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>

  <form action="controller/editProduct.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $product["ID"]?>">
    <label for="name">Name:</label><br>
    <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br><br>
    <label for="buyingPrice">Buying Price:</label><br>
    <input value="<?php echo $product['BuyingPrice'] ?>" type="text" id="buyingPrice" name="buyingPrice"><br><br>
    <label for="sellingPrice">Selling Price:</label><br>
    <input value="<?php echo $product['SellingPrice'] ?>" type="text" id="sellingPrice" name="sellingPrice"><br><br>
    <input type="submit" name="editProduct" value="Edit">
  </form>

</body>

</html>