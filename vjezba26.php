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
$trenutnaGodina= date("Y") ;
$godinaRodjenja=1985 ;

$brojGodina= $trenutnaGodina - $godinaRodjenja ;
echo "Korisnik ima" .  $brojGodina ."  godina !" ;
// funkcija print() 
echo "<br><br>" ;
echo print("Hello") ;

// jednostruki i dvostruki navodnici

echo"<br><br>" ;
$varijabla="25" ;
// dvostruki interpoliraju varijable,jednostruki ne
echo "Ja imam" . $varijabla . "godina" ;
echo 'Ja imam' . $varijabla . 'godina' ; 
echo "Ja imam $varijabla godina" ;
echo 'Ja imam $varijabla godina' ;  
echo "Ja imam [$varijabla] godina " ;
echo' Ja imam [$varijabla] godina'  ;
echo "Ja imam {$varijabla} godina" ;
echo' Ja imam {$varijabla} godina' ;
?>
</body>
</html>