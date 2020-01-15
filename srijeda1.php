<?php
class MojaKlasa { public $x ;}
$mk= new MojaKlasa() ;
$mk->x = 10 ;
$mk1=$mk ;
$mk1->x=25 ;
echo $mk->x ;
$mk->x=35 ;
echo $mk1->x ;


?>