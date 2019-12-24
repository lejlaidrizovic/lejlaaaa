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
    # useri koje imamo na sistemu (uloge)
  $user= 1 ;
  $admin= 2 ;
  $superadmin= 4;

 # user koji se loguje
 $loggedUser= 2 ;
 $allowedUsers= $admin | $superadmin ;
  
 if(($loggedUser & $allowedUsers) != 0 ) {
     echo "This user is allowed" ;

 }  else {
     echo "User is not allowed" ;
 }



?>

</body>
</html>