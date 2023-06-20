<?php

echo "Write a PHP function that accepts an array of integers and return a new array after removing odd
numbers.\n";
function WhithoutOdd(array $numbers): array {
    $newarr=[];
    foreach ($numbers as $number) {
        if($number%2==0){
        array_push($newarr,$number);
        }else{
            unset($number);   
        }
    }
   
    return $newarr;
}
$numbers = [1, 2, 3, 4, 5];
var_dump(WhithoutOdd($numbers));

echo "\n";
echo "Write a PHP function that accepts an array of strings and return the longest string found in the array,
the function should have a 2nd argument that will hold the index of the item that have the longest
string in the input array.
\n";
function longest(array $strings,&$numindex){
    $longestString = '';
    $numindex=-1;
    for ($i=0 ; $i<count($strings) ;$i++) {
        if (strlen($strings[$i]) > strlen($longestString)) {
         $longestString = $strings[$i];
         $numindex = $i;
       }
    }
    return $longestString;
}

$strings=["ayazuheir","nuha"];

$num=-1;
var_dump(longest($strings,$num));
echo "$num";


echo "\n";
echo "Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each
item in the first array by the corresponding item in the second array.\n";
function mult(array $arr1,array $arr2){
    $mularr=[];
    $maxarr=[];
    if(count($arr1)>count($arr2)){
        $maxarr=$arr1; 
        for($i =0;$i<count($arr1);$i++){
            if(isset($arr2[$i])){
                $mularr[$i]=  $arr2[$i]*$arr1[$i] ;
            }else{
                $arr2[$i]=1;
                $mularr[$i]= $arr2[$i]*$arr1[$i] ;
            }
        }
    }elseif(count($arr2)>count($arr1)){
        $maxarr=$arr2;
        for($i =0;$i<count($arr2);$i++){
            if(isset($arr1[$i])){
                $mularr[$i]= $arr2[$i]*$arr1[$i] ;
            }else{
                $arr1[$i]=1;
                $mularr[$i]= $arr2[$i]*$arr1[$i] ;
            }
        }
    }else{
        for ($i =0;$i<count($arr1);$i++) {
            $mularr[$i]= $arr2[$i]*$arr1[$i] ; 
        }
    }
return $mularr;
}
$arr1=[1,2,3];
$arr2=[1,2];

var_dump(mult($arr1,$arr2)) ;

echo "\n";
echo "Write a function to calculate the factorial of a number (a non-negative integer). The function accepts
the number as an argument.\n";

function factorial($int){
    $answer=1;
    if($int>=0){
    if($int==0||$int==1){
        $answer= $int;
    }else{
        $answer=  $int*factorial($int-1);
    }
}
    return $answer;
}
echo factorial(3);

echo "\n";
echo "Write a function to check whether a number is prime or not.
\n";
function isPrime($int){
    $c=0;
   for($i=2;$i<=$int-1;$i++){
     if($int%$i == 0){
        $c++;

     }
   
   }
 
   if ($c==2){
    echo "$int is prime";
   }else{
    echo "$int is not prime";
   }
}
isPrime(1);

echo "\n";