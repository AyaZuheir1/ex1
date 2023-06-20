<?php 
// num1
echo "num1\n";
$str1="lohello";
$a =substr($str1,-2);
$b =substr($str1,0,2);


if($a==$b){
    echo "first two characters and last two characters of a give string are same.";
}else{
    echo "first two characters and last two characters of a give string are not same.";
}
echo "\n";
/////////////////////////////////////////////////
//num2 
echo "num2\n";
$str3="GOplay";
$isgo =substr($str1,0,2);
$go="GO";

if($isgo==$go){
    echo "the text start with GO";
}else{
    echo "the text dont start with GO";
}
echo "\n";

//////////////////////////////////////
//num3
echo "num3\n";
$mul=9;

if($mul>0 && ($mul%3==0) || ($mul%7==0)){
    echo "number is a multiple of 3 or a multiple of 7";
}else{
    echo "number isnt a multiple of 3 and  7";
}
echo "\n";

// ////////////////////////////////////////////
// num4
echo "num4\n";
$int1=10;
$int2=30;
$int3=50;

// we can use this 


// for($i1=1;$i1<=3;$i1++){
//     if($int[i]>=$max){
//         $max=$int[i];
//     }
// }
echo max($int1,$int2,$int3);
echo "\n";

//////////////////////////////////
// num5
echo "num5\n";
$nearof1001=99;
$nearof1002=23;
$isnearof1001=100-$nearof1001;
$isnearof1002=100-$nearof1002;
//we can use this 
// min($isnearof1001,$isnearof1002);
if($nearof1001==$nearof1002){
    echo "0";
}elseif($isnearof1001<$isnearof1002){   
     echo "$nearof1001 is near of 100";
}elseif($isnearof1002<$isnearof1001){   
    echo "$nearof1002 is near of 100";
}
echo "\n";

///////////////////////////////
//num6
echo "num6\n";
$bet=23;
$bet2=33;
if($bet >= 20 && $bet <= 30){
echo max($bet,$bet2);
} elseif ($bet >= 20 && $bet <= 30) {
        echo $num1;
} elseif ($bet2 >= 20 && $bet2 <= 30) {
        echo $num2;
} else {
        echo 0;
}
echo "\n";

//////////////////////////////////////////
//num7
echo "num7\n";
$numbers = "859663215985";
$digit = 9 ; 
$count = 0;

for ($i = 0; $i < strlen($numbers); $i++) {
  if ($numbers[$i] == $digit) {
    $count++;
  }
}
echo $count;
echo "\n";

////////////////////////////////////////////
//num8
echo "num8\n";
$num="123";
$res=0;
for($i = strlen($num)-1 ; $i>=0 ; $i--){
 $res=$res+$num[$i];
}
echo $res;
echo "\n";


//////////////////////////
//num9
echo "num9\n";
$string="ayaa";
$number=0;
for($i = strlen($string)-1 ; $i>=0 ; $i--){
    if($string[$i]=="a"){
        $number++;
    }
   
}
echo $number;