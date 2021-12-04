<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form action="controller/createProduct.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="buyingPrice">Buying Price:</label><br>
        <input type="text" id="buyingPrice" name="buyingPrice"><br><br>

        <label for="username">Selling Price:</label><br>
        <input type="text" id="sellingPrice" name="sellingPrice"><br><br>

        <input type="checkbox" class="form-check-input" name="display" id="display" <?php echo isset($messages['data']['display']) && $messages['data']['display'] == "on" ? "checked" : ""; ?>>
        <label for="display" class="form-check-label mx-1">Display</label><br><br>

        <input type="submit" name="createProduct" value="Save">
    </form>

</body>

</html>