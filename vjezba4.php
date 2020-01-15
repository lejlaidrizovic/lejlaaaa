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

$recenica="Superman je Klark Kent.Spiderman je Piter Parker.Batman je Bruce Wayne.Wonderwoman je Diana Price.Flash je Barry Alen." ;
$Superheroji=array (

    "Superman",
    "Spiderman",
    "Batman",
    "Wondarwoman",
    "Flash"

);
$recenicaNiz=explode(" ",$recenica);
foreach($recenicaNiz as $key=> &$value){
    $velicinaSuperheroja=count($Superheroji);
    for($i=0; $i<$velicinaSuperheroja;$i++){
if($value==$Superheroji[$i]){
    $value="*********" ;
}


    }
}
print_r($recenicaNiz);





?>





</body>
</html>