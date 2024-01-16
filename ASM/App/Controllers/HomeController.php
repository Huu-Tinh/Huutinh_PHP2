<?php
namespace App\Controllers;
class HomeController{
    public function __construct()
    {
        require 'App/Views/index.php';
    }
}