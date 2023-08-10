<?php
    include '../classes/User.php';

    # Instantiate the object
    $user = new User;

    if(isset($_POST['register'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // call the register method
        $user->register($first_name, $last_name, $username, $password);

    } elseif(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // call the login method
        $user->login($username, $password);
    }
    
?>