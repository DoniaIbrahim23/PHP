<?php
  $name = "programmer"; 
  echo "Hello, $name";

  echo "<br>";
  echo "-------------------------------";
  echo "<br>";

  ///2///

  $num1= 10;
  $num2= 5;
  echo "Summation result is: " . $num1+$num2;
  echo "<br>";

  echo "Subtraction result is: " . $num1-$num2;
  echo "<br>";

  echo "Multiplication result is: " . $num1*$num2;

  echo "<br>";
  echo "-------------------------------";
  echo "<br>";

  ////3///

  $A=10;
  $B=20;
  $C=5;
  $D=3;

  $result= ($A*$B )-($C*$D);

echo "Difference = " .$result;

echo "<br>";
  echo "-------------------------------";
  echo "<br>";

  //////4///
  $N=15;
  $M=25;

  $LN= $N%10;
  $LM= $M%10;

  echo "Summation result of their last digits is: " . $LN+$LM;

  echo "<br>";
  echo "-------------------------------";
  echo "<br>";

  /////5///
  $num=4569;
  $digit= (int)($num/1000);
  if($digit%2==0){
    echo "The number $num is EVEN";
  } else {
    echo "The number $num is ODD";
  };

  echo "<br>";
  echo "-------------------------------";
  echo "<br>";

  //////6///
$a = 22;
$b = 10;
$k = 2;

if( $a % $k == 0 && $b % $k == 0 ){
    echo "BOTH";
} else if( $a % $k == 0 ){
    echo "MOMO";
} else if( $b % $k == 0 ){
    echo "MEMO";
} else {
    echo "No One";
};

echo "<br>";
  echo "-------------------------------";
  echo "<br>";

  ////7//
  $Numb = 39;

$first = (int)($Numb / 10) ;
$second = $Numb % 10 ;

if( $first % $second == 0 || $second % $first == 0 ){
    echo "YES";
} else {
    echo "NO";
};















?>