<?php
namespace Controller\Server;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Server {

    function __construct() {
        $this->db = new \MeekroDB();
        $this->mkdb = new \PDO('mysql:dbname=app_db;host=localhost;charset=utf8mb4', 'root', '');
        $this->auth = new \Delight\Auth\Auth($this->mkdb);
    }

    public function register_user()
    {

        extract($_POST);

        try {

            $userId = $this->auth->register($email, $password, $username, function ($selector, $token) {

            });

            $this->db->query("UPDATE users SET user_type=%s WHERE id=%i", $utype, $userId);
            // $this->verification($email, $this->hash->encode($userId));

            echo json_encode(["response"=>'Verification email has been sent!', "status"=>1]);
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            echo json_encode(["response"=>'Invalid email address', "status"=>0]);
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            echo json_encode(["response"=>'Invalid password', "status"=>0]);
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            echo json_encode(["response"=>'User already exists', "status"=>0]);
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            echo json_encode(["response"=>'Too many requests', "status"=>0]);
        }

    }

}

?>