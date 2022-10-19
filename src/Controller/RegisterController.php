<?php

namespace App\Controller;

use App\Database\DatabaseController;

class RegisterController
{

    public function __construct()
    {

        $db = DatabaseController::getInstance();
        $this->conn = $db->getConnection();
    }

    public function register($name, $surname, $email, $username, $pass)
    {

        // select a particular user by email
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        $tot_rows = $stmt->rowCount();

        if ($tot_rows < 1) {
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO users (first_name, last_name, email, user_name, user_password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $surname);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $username);
            $stmt->bindParam(5, $hashed_password);

            if ($stmt->execute()) {
                echo "Success";
            }
        }else{
            echo "Error: user already exist!";
        }
    }
}
