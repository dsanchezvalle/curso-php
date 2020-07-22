<?php
namespace App\Models;
require_once 'vendor/autoload.php';


use App\Models\{Job, Project};

$jobs = Job::all();

$project1 = new Project('Proyecto 1','Hola, este es mi primer proyecto.');
$project1 -> months = 17;
$project1 -> visible = true;

$projects = [$project1];

function printElement($job) {
    if ($job -> visible == false) return;

    echo '<li class="work-position">';
    echo '<h5>' . $job ->title . '</h5>';
    //echo '<p> Duración: ' . $job['months'] . ' meses</p>';
    echo '<p>'. $job -> getDurationAsString() . '</p>';
    //echo '<p> Antigüedad: ' . $totalMonths . ' meses</p>';
    //echo '<p>' . $job -> description . '</p>';
    echo '<p>' . $job ->description . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}


