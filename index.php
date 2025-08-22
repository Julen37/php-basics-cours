<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // for ($i=0; $i<10; $i++){
        //     echo "<h1>Hi</h1>";
        // }
    
        // $names = ["Karim", "Bob", "Sabrina"];
        // foreach ($names as $name){
    ?>
    <!-- <h1>Hi <?= $name?></h1> -->
    <?php        
        // }
    ?>

    <form action="backend.php" method="POST">
        <label for="name">Name</label>
        <input type="text" value="" name="name" placeholder="Name" required>
        <label for="price">Price</label>
        <input type="number" min="0.01" step="0.01" value="" name="price" placeholder="Price" required>
        <button type="submit">push the button plz</button>
    </form>
</body>
</html>