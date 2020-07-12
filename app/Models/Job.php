<?php
namespace App\Models;
//require_once 'BaseElement.php'; //Reemplazado por autoload
//require_once 'Printable.php';

class Job extends BaseElement {

    public function __construct($title, $description)
    {
        $newTitle = 'Job: ' . $title;
        parent::__construct($newTitle, $description);
        //$this->title= $newTitle;
    }

    public function getDurationAsString (){
        $years = floor($this -> months / 12);
        $extraMonths = $this -> months % 12;

        if ($years == 0) {
            if ($extraMonths == 1){
                return "Job D: $extraMonths mes.";
            }
            return "Job D: $extraMonths meses.";
        }

        if ($extraMonths == 0) {
            if ($years == 1){
                return "Job D: $years año.";
            }
            return "Job D: $years años.";
        }
        if ($years == 1 and $extraMonths != 1){
            return "Job D: $years año y $extraMonths meses.";
        }
        if ($extraMonths == 1 and $years != 1) {
            return "Job D: $years años y $extraMonths mes.";
        }
        if ($years == 1 and $extraMonths == 1) {
            return "Job D: $years año y $extraMonths mes.";
        }
        return "Job D: $years años y $extraMonths meses.";
    }


}