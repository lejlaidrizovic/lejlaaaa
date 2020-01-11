<?php

class DateDifference{

    public $date1=" " ;
    public $date2=" " ;
    public $result=" " ;

    public function __construct($date1,$date2) {
        $this->date1 =$date1 ;
        $this->date2=$date2;
    }

    public function diff() {
       $date1 = new DateTime($this->date1) ;
       $date2 = new DateTime($this->date2) ;
       $result= $date1->diff($date2) ;
       return $result->days ;

 
    }

}

$datum1= Date("d-m-Y") ;
$datum2="23-03-2025" ;

$datumRazlika=new DateDifference($datum1,$datum2) ;
echo $datumRazlika->diff() ;










?>



