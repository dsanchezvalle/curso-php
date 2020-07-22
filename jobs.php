<?php

/*require 'app/Models/Job.php';
require 'app/Models/Project.php';
require_once 'app/Models/Printable.php';
require 'lib1/Project.php'; */
//Requires antiguos antes de usar Autoload.php

require_once 'vendor/autoload.php';
use App\Models\{Job,Project,Printable};
// 'use' Sirve para que las clases se declaren en este namespace ya que antes solo estaban en el propio.

$job1 = new Job ('PHP Developer', 'Desarrollo de apps WEB a la medida.');
//$job1 -> setTitle('PHP Developer');
//$job1 -> description = 'Desarrollo de apps WEB a la medida.';
$job1 -> months = 13;
//$job1 -> visible = true;

$job2 = new Job ('Web Developer', 'Desarrollo de apps WEB a la medida.' );
//$job2 -> setTitle('Web Developer');
//$job2 -> description = 'Desarrollo de apps WEB a la medida.';
$job2 -> months = 10;
//$job2 -> visible = true;

$job3 = new Job ('IOs Dev', 'Desarrollo de apps WEB a la medida.');
//$job3 -> setTitle('IOs Dev');
//$job3 -> description = 'Desarrollo de apps WEB a la medida.';
$job3 -> months = 8;
//$job3 -> visible = true;

$project1 = new Project('Proyecto 1','Hola, este es mi primer proyecto.');
$project1 -> months = 17;

//$projectLib = new Lib1\Project();

$jobs=[$job1, $job2, $job3];

$projects = [$project1];
 /*   [
        'title' => 'Director proyectos sociales',
        'description' => 'Desarrollo de proyectos y programas de emprendimiento',
        'months' => '1',
        'visible' => false
    ],
    [
        'title' => ,
        'description' => 'Desarrollo de apps WEB a la medida.',
        'months' => '1',
        'visible' => true
    ],
    [
        'title' => 'Asistente de admisiones',
        'description' => 'Apoyo en archivo',
        'months' => '20',
        'visible' => true
    ],
    [
        'title' => 'IOs Dev',
        'description' => 'Desarrollo de aplicaciones en IOs.',
        'months' => '25',
        'visible' => true
    ]
];
*/

function printElement($job) {
    //Contenido de la función
    //echo 'HolaJobs';
    if ($job -> visible == false){
        return;
    }

    echo '<li class="work-position">';
    echo '<h5>' . $job -> getTitle() . '</h5>';
    //echo '<p> Duración: ' . $job['months'] . ' meses</p>';
    echo '<p>'. $job -> getDurationAsString() . '</p>';
    //echo '<p> Antigüedad: ' . $totalMonths . ' meses</p>';
    //echo '<p>' . $job -> description . '</p>';
    echo '<p>' . $job -> getDescription() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}


