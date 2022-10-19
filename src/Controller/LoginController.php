<?php

namespace App\Controller;

use App\Database\DatabaseController;
use PDO;

class LoginController
{
    public function __construct()
    {
        $db = DatabaseController::getInstance();
        $this->conn = $db->getConnection();
    }

    public function login($username, $pass)
    {
        if (strlen($pass) < 8) {
            echo 'Your password is too short!';
            die;
        }

        //$arr = [];
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_name <= ?");
        $stmt->execute([$username]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $hashed_password = $row['user_password'];
        }

        if (password_verify($pass, $hashed_password)) {
            echo('logged In Successfully');
            die;
        } else {
            echo 'Ivalid logins';
            die;
        }
    }
}
