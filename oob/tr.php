<?php

// class Str
// {
//    public readonly string $value;
//    public function __construct(string $str){
//     $this->value=$str;
//    }
//    public function length() : int{
//     return strlen($this->value);
//    }
//    public function equal() {
//     return self::value===$str;
//    }
//    public function getValue(){
//     return self::$value;
//    }

// }
// $str =new Str('aya');
// var_dump($str->length(),$str->equal('aya'),$str::getValue());
class Str
{
   public readonly string $value;
   
   public function __construct(string $str){
      $this->value = $str;
   }
   
   public function length() : int{
      return strlen($this->value);
   }
   
   public function equal(string $str) : bool {
      return $this->value === $str;
   }
   
   public function getValue(){
      return $this->value;
   }
}

$str = new Str('aya');
// var_dump($str->length(), $str->equal('aya'), $str->getValue());
