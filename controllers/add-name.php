<?php

checkCount($_POST['name'], 3, '/');


App::get('database')->insert('users',[
    'name' => $_POST['name'],
]);

// App::get('database')->update('tasks', [
//     'description' => 'go to the class',
//     'complete' => false,
// ], 1);

// App::get('database')->update('users', [
//     'name' => 'Aung Aung',
// ], 18);


// App::get('database')->delete('users', 18);
// App::get('database')->delete('tasks', 1);
