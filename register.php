<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];
    $confirmedPassword = $_POST["confirm-password"];


    $userData = json_decode(file_get_contents('users.json'), true);


    foreach ($userData as $user) {
        if ($user["username"] === $enteredUsername) {
            echo "Username already exists. Please choose a different one.";
            exit;
        }
    }
     

    if ($enteredPassword === $confirmedPassword) {
        $newUser = [
            "username" => $enteredUsername,
            "password" => $enteredPassword
        ];


        $userData[] = $newUser;


        file_put_contents('users.json', json_encode($userData));

        echo "Registration successful!";
    } else {

        echo "Password confirmation failed. Please try again.";
    }
}
