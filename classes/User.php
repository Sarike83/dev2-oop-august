<?php
    require 'Database.php';

    class User extends Database {
        public function register($first_name, $last_name, $username, $password) {
            $sql = "INSERT INTO users(`first_name`, `last_name`, `username`, `password`) VALUES('$first_name', '$last_name', '$username', '$password')";

            # execute the query string
            if($this->conn->query($sql)) {
                header("location: ../views"); // login page
                exit;
            } else {
                die("Error in registering user." . $this->conn->error);
            }
        }

        public function login($username, $password) {
            $sql = "SELECT * FROM users WHERE username = '$username' ";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1) { //=結果がある場合
                $user = $result->fetch_assoc();

                if(password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];

                    header("location: ../views/dashboard.php");
                    exit;
                } else {
                    die("Password is incorrect.");
                }
            } else {
                die("Username not found.");
            } 
        }
    }

?>