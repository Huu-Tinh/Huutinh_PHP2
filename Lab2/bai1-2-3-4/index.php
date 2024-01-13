<?php
// bài 2
// require 'App/database.php';

// bài 3
// spl_autoload_register(function ($class) {
//     require  $class . '.php';
// });

// bài 4
require 'vendor/autoload.php';

use App\database as cat;

$db = new cat();
echo '<br/>';
$db->hello();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>