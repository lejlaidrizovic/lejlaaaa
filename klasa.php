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

class Gradevina{
  public  $duzina=" ";
  public  $sirina=" " ;
  
  public function __construct($duzina,$sirina) {
 $this->duzina=$duzina ;
 $this->sirina=$sirina ;

  }

public function ispis(){
echo "Moja gradevina je duga " . $this->duzina . " i siroka" . $this->sirina ;
}

}

$kuca= new Gradevina(20,10) ;
$zgrada=new Gradevina(30,30) ;
$vikendica=new Gradevina(5,7) ;

$kuca->ispis();
echo "<br>" ;
$zgrada->ispis() ;
echo "<br>" ;
$vikendica->ispis() ;






?>

    
</body>
</html>