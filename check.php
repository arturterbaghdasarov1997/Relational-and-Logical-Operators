<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $username = $_POST ["username"];
    $password = $_POST ["password"];
    $confirm_password = $_POST ["confirm_password"];

    // Check if passwords match
    if ($password == $confirm_password) {
        echo "$username <br>";
        echo "Registration succesful.";
    } else {
        echo "Passwords don't match. Please, try again.";
    }
}
?>