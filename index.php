<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = "thura kyaw";
    $age = 23;
    $gf = 3;

    $fruits = ["apple", "banana", "car", "lemon", "durain"];
    ?>

    <ul>
        

    <?php foreach($fruits as $key => $fruit): ?>
    <p>


        <?= $key. " | " . $fruit ?>
    </p>
    <?php endforeach; ?>

    </ul>


   
    
    

</body>
</html>