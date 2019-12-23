<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$tekst= "abcde" ;
$broj= 12345 ;
$decimalni=123.45 ;
$niz=['a', 'b', 'c', 'd', 'e'] ;
// ispis tipova podataka i njihovih vrijednosti
var_dump($tekst) ;
echo "<br>" ;
var_dump($broj ) ;
echo "<br>" ;
var_dump($decimalni ) ;

echo "<br>" ;
var_dump($niz ) ;
//print_r()-ispis niza ili objekta
echo "<br>" ;
print_r($niz) ;

// print_f() -evaluacija/ interpolacija promjenljivih u tekstu
echo "<br>" ;
$x= 13 ;
$y= 15 ;
$z= 25 ;
printf ("Ostalo je jos %s dana...<br>", $x) ;

printf ("Ostalo je jos %s dana...<br>", $x) ;
printf("Ja imam %b godina", $z) ;






?>
</body>
</html>