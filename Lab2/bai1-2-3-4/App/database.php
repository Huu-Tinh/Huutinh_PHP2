<?php

namespace App;

use mysqli;

class database
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        $conn = new mysqli($servername, $username, $password);
        if (!$conn) {
            die("Lỗi kết nói" . $conn->connect_error());
        } else {

            echo "kết nối thành công";
        }
    }
    public function hello(){
        echo "hello";
    }
}
