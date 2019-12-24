<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pristup stranici</title>
</head>
<body>
    <?php
   #uloge definisane u bazi
   $student = 1 ;
   $profesor = 2 ;
   $koordinator = 4 ;
   $podrska = 8 ;

# korisnik koji se ulogovao i postoji u bazi
$korisnik = 4 ;

$allowedUsers= $koordinator | $podrska ;
if(($allowedUsers & $korisnik ) != 0 ) {
    ?>
   <div style="
   background-color: red ;
   color: white ;
   ">
 <p>Zona dostupna samo koordinatorima i podršci.</p> 

</div>


    <?php


}
?>
 <div style="
  background-color: blue ;
 ">
 <p>Zona dostupna svima</p>
 </div>
<?php 


?>
</body>
</html>