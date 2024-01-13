<?php
spl_autoload_register(function($class){
    require $class.'.php';
});

use App\Controller\BaseControl;
use App\Model\Basemodel;
use App\Core\Route;

$core = new Basemodel();
echo '<br>';
$controller = new BaseControl();
echo '<br>';
$model = new Route();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>abc</h1> -->
</body>

</html>