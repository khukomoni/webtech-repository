<?php
require_once 'controller/productInfo.php';

$student = fetchProduct($_GET['id']);
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<table>
		<tr>
			<th>Name</th>
			<th>BuyingPrice</th>
			<th>SellingPrice</th>
		</tr>
		<tr>
			<td><a href="showProduct.php?id=<?php echo $product['Name'] ?>"></a></td>
			<td><?php echo $product['Buying Price'] ?></td>
			<td><?php echo $product['Selling Price'] ?></td>
		</tr>

	</table>

</body>

</html>