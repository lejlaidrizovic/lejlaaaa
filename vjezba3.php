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
   #promjenljive i konstante
   $promjenljiva="Ovo je promjenljiva" ;
   define('konstanta',"Ovo je konstanta") ;

   echo $promjenljiva ;
   echo "<br><br>" ;
   echo konstanta ;

   $promjenljiva= "Ovo je promijenjena promjenljiva" ;
   define('konstanta',"Ovo je nova konstanta") ;

   echo $promjenljiva ;

   echo "<br><br>" ;
   echo konstanta ;





   ?>
</body>
</html>