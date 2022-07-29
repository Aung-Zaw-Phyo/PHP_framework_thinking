<?php require 'views/partials/heading.php'; ?>

    <div class="container mt-5 text-center">

        <h3>Home Page</h3>
    
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

<?php require 'views/partials/footer.php'; ?>