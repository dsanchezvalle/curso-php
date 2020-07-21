<?php
namespace App\Models;
//require_once 'BaseElement.php'; //Reemplazado por autoload
//require_once 'Printable.php';


class Project extends BaseElement {
/*
    public function __construct($title, $description)
{
    $newTitle = 'Project: ' . $title;
    parent::__construct($newTitle, $description);
    //$this->title= $newTitle;
}

    public function getDurationAsString (){
        $years = floor($this -> months / 12);
        $extraMonths = $this -> months % 12;

        if ($years == 0) {
            if ($extraMonths == 1){
                return "PD: $extraMonths mes.";
            }
            return "PD: $extraMonths meses.";
        }

        if ($extraMonths == 0) {
            if ($years == 1){
                return "PD: $years año.";
            }
            return "PD: $years años.";
        }
        if ($years == 1 and $extraMonths != 1){
            return "PD: $years año y $extraMonths meses.";
        }
        if ($extraMonths == 1 and $years != 1) {
            return "PD: $years años y $extraMonths mes.";
        }
        if ($years == 1 and $extraMonths == 1) {
            return "PD: $years año y $extraMonths mes.";
        }
        return "PD: $years años y $extraMonths meses.";
    }
*/
}