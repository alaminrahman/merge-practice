<?php 

1. Alamin
2. Hossain
3.MD KABIR HOSSAIN HOSSAIN



//oop practice

//Traits



//Late static binding

// class personal{
//     public static $name = "Sumon";

//     public static function show(){
//         echo static::$name; //late static binding
//     }

// }

// class account extends personal{

//     public static $name = "Al-amin";
// }

// $obj = new account();
// $obj->show();

//static member

// class personal{
//     public static $name = 'Alamin';

//     public static function show(){
//         echo self::$name;
//     }
// }



// class account extends personal{
//     public static function show(){
//         echo parent::$name; 
//     }
// }

// $obj = new account();
// $obj->show();

//interface
// interface parent1{
//     function calc($a, $b);
// }

// interface parent2{
//     function sub($a, $b);
// }

// class childClass implements parent1, parent2{
//     public function calc($a, $b){
//         echo $a + $b;
//     }

//     public function sub($a, $b){

//     }
// }


//Abs class
// abstract class parentClass{
//     public $name;
//     abstract protected function calc($a, $b);
// }

// class childClass extends parentClass{
//     public function calc($a, $b){
//         echo $a + $b;
//     }
// }

// $obj = new childClass();

// $obj->calc(10, 5);