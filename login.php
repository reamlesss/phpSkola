<?php
$validCredentials = json_decode(file_get_contents('user_credentials.json'), true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];


    if (isValidCredentials($enteredUsername, $enteredPassword, $validCredentials)) {

    } else {

        echo "Invalid login credentials. Please try again.";
    }
}

function isValidCredentials($username, $password, $validCredentials)
{

    foreach ($validCredentials as $credential) {
        if ($credential["username"] === $username && $credential["password"] === $password) {
            return true;
        }
    }

    return false;
}




