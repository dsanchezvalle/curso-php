<?php
namespace App\Models;
//Variables superglobales
//var_dump($_POST);
//var_dump($_GET);

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'david',
    'password'  => '12345',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

?>

<html>
    <head>
        <title>Add Job</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
              crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
     </head>
    <body>
    <h1>Add Job</h1>
    <form action="addJob.php" method="post">
        <label for="">Title:</label>
        <input type="text" name="title"> <br>
        <label for="">Description:</label>
        <input type="text" name="description"> <br>
        <button type="submit">Save</button>
    </form>

    </body>

</html>