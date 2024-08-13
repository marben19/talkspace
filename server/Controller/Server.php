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

}

?>