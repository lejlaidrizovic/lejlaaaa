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
     $x=10;
     $y=10;
     for($i=0; $i<$y; $i++)  {
        for($j=0; $j<$x; $j++){
            if($i==0  || $i==$x-1) {
            echo "X" ; }
            else {
                if($j==0 || $j==$y-1)
    
                {
                    echo "X" ;
                    
                } else {
                    echo"H" ;
                }
            }
        } 
           echo"<br>" ;

     }
          
    ?>  
</body>
</html>

