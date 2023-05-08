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


        function star($count) {
    $result = "";
    for ($i = 0; $i < $count; $i++) {
        $result .= "* ";
    }
    return $result;
}

    ?>

    <?php foreach($products as $pd): ?>
        <div class=" ">
        <img src="<?= $pd["image"] ?>" height="200" alt="">
        <p><?= $pd['title'] ?></p>
        <p>$ <?= $pd['price'] ?></p>
       <?= star($pd["rating"]["rate"]) ?>
        <p><?= $pd['description'] ?></p>
        </div>
        <hr>

    <?php endforeach; ?>
</body>
</html>
