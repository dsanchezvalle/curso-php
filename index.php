<?php
namespace App\Models;
require_once 'vendor/autoload.php';

$lastname = 'Sánchez Valle';
//$name = 'David ' . $lastname;
$name = "David $lastname";
$limitMonths = 1000;


use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\{Job, Project};

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

require_once 'jobs2.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1><?php echo $name; ?></h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: dsanva2004@mail.com</li>
          <li>Phone: +57 3008194321</li>
            <li>LinkedIn: <a href="https://linkedin.com/in/dsanchezvalle"> https://linkedin.com/in/dsanchezvalle </a></li>
            <li> Twitter: <a href="http://twitter.com/dsanchezvalle"> @dsanchezvalle </a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray"> Introducción </h2>
        <p>
            Soy una persona apasionada por la Educación, el Emprendimiento y la Innovación como herramientas clave para el desarrollo económico y social de un país o una región.
            He tenido la oportunidad de trabajar en los tres sectores: público, privado y no gubernamental, convencido de que cada persona tiene un potencial único que debe ser desencadenado con el fin de lograr cambios positivos sistémicos en nuestra sociedad. En este sentido, quiero diseñar e implementar soluciones innovadoras para los problemas sociales más apremiantes.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Experiencia laboral</h3>
          <ul>
              <?php
              $totalMonths = 0;
              //$idx = 0;
              //do {
              for($idx = 0; $idx < count($jobs); $idx++) {
                  $totalMonths += $jobs[$idx] -> months;

                  if ($totalMonths > $limitMonths){
                      break;
                  }


                    printElement($jobs [$idx]);
                      //$idx++;

              }
              //}while($idx < 3);
              ?>
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                <ul>
                    <?php
                    $totalMonths = 0;
                    //$idx = 0;
                    //do {
                    for($idx = 0; $idx < count($projects); $idx++) {
                        $totalMonths += $projects[$idx] -> months;

                        if ($totalMonths > $limitMonths){
                            break;
                        }


                        printElement($projects [$idx]);
                        //$idx++;

                    }
                    //}while($idx < 3);
                    ?>
                </ul>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>