<?php
namespace App\Models;
require_once 'app/Models/Printable.php';

class BaseElement implements Printable {
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description)
    {
        $this->setTitle($title);
        $this->description = $description;
    }

    public function setTitle($t) {
        if ($t == ""){
            $this -> title = 'N/A';
        }
        else{
            $this->title = $t;
        }
    }

    public function getTitle() {
        return $this -> title;
    }

    public function getDurationAsString (){
        $years = floor($this -> months / 12);
        $extraMonths = $this -> months % 12;

        if ($years == 0) {
            if ($extraMonths == 1){
                return "$extraMonths mes.";
            }
            return "$extraMonths meses.";
        }

        if ($extraMonths == 0) {
            if ($years == 1){
                return "$years año.";
            }
            return "$years años.";
        }
        if ($years == 1 and $extraMonths != 1){
            return "$years año y $extraMonths meses.";
        }
        if ($extraMonths == 1 and $years != 1) {
            return "$years años y $extraMonths mes.";
        }
        if ($years == 1 and $extraMonths == 1) {
            return "$years año y $extraMonths mes.";
        }
        return "$years años y $extraMonths meses.";
    }

 public function getDescription(){
        return $this->description;
    }


}