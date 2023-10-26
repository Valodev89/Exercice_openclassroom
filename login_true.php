<?php

include('variables.php');

$postData = $_POST;

if (isset($postData['email']) && isset($postData['password'])) {
    $email = $postData['email'];
    $message = $postData['password'];
        foreach($users as $value) {
            if ($user['email'] === $email && $user['password'] === $message) {
                
            }
        }
        if ($usersmail === $postData['email'] && $userpassword === $postData['password']) {
            echo "Bienvenue";
        } else {
            echo "votre email ou mot de passe est invalide";
        }
}


?>

