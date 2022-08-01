<?php

checkCount($_POST['name'], 3, '/');


// $db->insert('users',[
//     'name' => $_POST['name'],
// ]);

// $db->update('tasks', [
//     'description' => 'go to the class',
//     'complete' => false,
// ], 1);

$db->update('users', [
    'name' => 'Aung Aung',
], 18);


// $db->delete('users', 18);
// $db->delete('tasks', 1);
