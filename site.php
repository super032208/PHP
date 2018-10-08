<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> lab one </title>
</head>
<body>

<?php

function fizzBuzz(number){

for($i=0; $i<100; $i++)
   if( i % 3 === 0 && i % 5 === 0)
   {
     echo ("Fizz Buzz");
   }
   else if ( i % 3 === 0)
    {
     echo (" Fizz ");
   }
else if (i % 5 === 0)
 {
  echo (" Buzz");
}
else {
  echo (" the value of i is ". i);
}



}

$test = 50;
$test2 = 55;
fizzBuzz($test);

 ?>

</body>
</html>
