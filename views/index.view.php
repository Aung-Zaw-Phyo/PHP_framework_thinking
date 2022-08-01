<?php require 'views/partials/heading.php'; ?>

    <div class="container mt-5 text-center">

        <h3>Home Page</h3>
    
        <div class="my-5 col-4 mx-auto">
            <h4>Submit for you name</h4>

            <form action="/names" method="POST" class="text-start mt-4">
                <input type="text" class="form-control mb-3" name="name" id="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <?php 
            
            foreach ($users as $user) {
                echo $user->name . '<br>';
            } 
        ?>

    </div>

<?php require 'views/partials/footer.php'; ?>