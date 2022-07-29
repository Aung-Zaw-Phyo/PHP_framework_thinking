<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 text-center">

    <h3>Home Page</h3>
    
    <div class="my-5">
            <a href="/" class="text-decoration-none m-3">Home</a>
            <a href="about" class="text-decoration-none m-3">About</a>
            <a href="contact" class="text-decoration-none m-3">Contact</a>
            <a href="product" class="text-decoration-none m-3">Product</a>
    </div>

    <?php foreach($tasks as $task) : ?>
        <?php 
        if($task->complete){
            echo "<p><strike> $task->description </strike></p>";
        } else {
            echo "<p> $task->description </p>";
        }
        ?>
    <?php endforeach ?>

    </div>
</body>
</html>