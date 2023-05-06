<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php shopcart</title>
</head>
<body>
    <?php
        $producttext = file_get_contents("https://fakestoreapi.com/products");

        $products = json_decode($producttext, true);
    ?>

    <?php foreach($products as $pd): ?>
        <div class=" ">
        <img src="<?= $pd["image"] ?>" height="200" alt="">
        <p><?= $pd['title'] ?></p>
        <p><?= $pd['description'] ?></p>
        </div>


    <?php endforeach; ?>
</body>
</html>