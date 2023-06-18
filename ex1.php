<?php 
// num1
$str1="lohello";
$a =substr($str1,-2);
$b =substr($str1,0,2);


if($a==$b){
    echo "first two characters and last two characters of a give string are same.";
}else{
    echo "first two characters and last two characters of a give string are not same.";
}
echo "////////////////////////////////";
/////////////////////////////////////////////////
//num2 
$str3="GOplay";
$isgo =substr($str1,0,2);
$go="GO";

if($isgo==$go){
    echo "the text start with GO";
}else{
    echo "the text dont start with GO";
}
echo "////////////////////////////////";

//////////////////////////////////////
//num3
$mul=9;

if($mul>0 && ($mul%3==0) || ($mul%7==0)){
    echo "number is a multiple of 3 or a multiple of 7";
}else{
    echo "number isnt a multiple of 3 and  7";
}
echo "////////////////////////////////";

// ////////////////////////////////////////////
// num4
$int1=10;
$int2=30;
$int3=50;
$max=$int1;
// we can use this 
// max($int1,$int2,$int3);

for($i1=1;$i1<=3;$i1++){
    if($int[i]>=$max){
        $max=$int[i];
    }
}
echo $max;
echo "////////////////////////////////";

//////////////////////////////////
// num5
$nearof1001=99;
$nearof1002=23;
$isnearof1001=100-$nearof1001;
$isnearof1002=100-isnearof1002;
//we can use this 
// min($isnearof1001,$isnearof1002);
if($nearof1001==$nearof1002){
    echo "0";
}elseif($isnearof1001<$isnearof1002){   
     echo "$isnearof1001 is near of 100";
}elseif($isnearof1002<$isnearof1001){   
    echo "$isnearof1002 is near of 100";
}
echo "////////////////////////////////";

///////////////////////////////
//num6
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
echo "////////////////////////////////";

//////////////////////////////////////////
//num7

$numbers = "859663215985";
$digit = 9 ; 
$count = 0;

for ($i = 0; $i < strlen($numbers); $i++) {
  if ($numbers[$i] == $digit) {
    $count++;
  }
}
echo $count;
echo "////////////////////////////////";

////////////////////////////////////////////
//num8
$num="123";
$res=0;
for($i = strlen($num)-1 ; $i>=0 ; $i--){
 $res=$res+$num[$i];
}
echo $res;
echo "////////////////////////////////";

//////////////////////////
//num9
$string="ayaa";
$number=0;
for($i = strlen($string)-1 ; $i>=0 ; $i--){
    if($string[$i]=="a"){
        $number++;
    }
   
}
echo $number;