<?php
// function displayDate(){
//     return date("l, F n, Y");
// }
// $date = displayDate();// Monday, June 6, 2021
// echo displayDate();


// $example = function(){
//     echo "Closure";
// };
// $example(); // Closure

// require_once("switch.php"); // Juma

// function retrieveUserprofile(){
//     $user[] = "Norboyev Elyor";
//     $user[] = "elyor.norboyev1994@gmail.com";
//     $user[] = "English";
//     $user[] = "+ 998 91 775 94 05";
//     return $user;
// }
// list($name, $email, $language, $phone_number) = retrieveUserprofile();
// echo "Name:{$name}<br> email:{$email} <br> language:{$language}<br> Phone:{$phone_number}";

// function fact($n){
//     if($n == 0)
//     return 1;
//     else 
//     return $fact = $n * fact($n-1);
// }
// echo fact(5); // 24

// $name = "Elyor";
// function hello($name){
//     echo "Assalomu alaykum $name!";
// }
// hello($name);

// $name = "Elyor";
// function hello(){
//     global $name;
//     echo "Assalomu alaykum $name!";
// }
// hello();

// function calc($a, $b){
//    $c = $a + $b;
//    echo $c; 
// }
// calc(5, 10);

// function calc($a, $b){
//     return $c = $a + $b; 
// }
// $c = calc(5, 10);
// echo "Kalkulyatordagi sonlar yig'indisi: $c";


// Sting funksiyalar
// explode(satrni har birini alohida qirqib oladi)
// implode satrda alohida qator qaytaradi
// htmlspecialchars elementlarni html kodi bo'yicha yozadi
// Trim funksiaysi oradagi barcha probellarni olib tashlaydi
// md5 funksiyasi yozuv kodlarni shifrlaydi
// str_replace funksiyasi o' belgisini o`belgisiga aylantirib beradi
// strip_tags funksiyasi kodda yozilgan har qanday hmtl belgilarini olib tashlaydi


// $string = "Elyor, Eldor, Shuxrat, Hakim, Muhammad, Bobur";
// $arr = explode(" ", $string);
// print_r($arr);


// implode satrda alohida qator qaytaradi
// $arr = ['Elyor', 'Eldor', 'Shuxrat', 'Hakim', 'Muhammad', 'Bobur'];
// print_r($arr);
// $string = implode(",", $arr);
// echo $string;

// $str = htmlspecialchars("<h1>Hello world</h1>");
// echo $str;

// Trim funksiaysi oradagi barcha probellarni olib tashlaydi
// $str = trim("        Hello world       !");
// echo $str;

// $password = md5("Elyor");
// echo $password; // 20c8e3df5b81c7181794e5e9f091b87c

// $FIO = "O'tkirbek G'oyibov To'raqulovich";
// $str = str_replace("'", "`", "$FIO");
// echo $str; 

// $str = strip_tags("<b><span>Hello world!</span></b>");
// echo $str;

// function makecoffee($type = "cappuccino"){
//     return "Making a cup of $type.\n";
// }
// echo makecoffee();
// echo "<br>";
// echo makecoffee(null);
// echo "<br>";
// echo makecoffee("espresso");

// function sum(...$numbers){
//     $acc = 0;
//     foreach($numbers as $n){
//         $acc += $n;
//     }
//     return $acc;
// }
// echo sum(1, 2, 3, 4, 6);

// function square($num){
//     return $num * $num;
// }
// echo square(9);


// Classlar
// class SimpleClass{
//     public $var = 'a default value'; // property
//     public function displayVar(){ // method
//      echo $this->var;
//     }
// }
// $simp = new SimpleClass();
// $simp->displayVar(); // a default value

// class Foo{
//     public $bar = 'property';
//     public function bar(){
//         return 'method';
//     }
// }
// $obj = new Foo();
// echo $obj->bar . "<br>" . $obj->bar();// property
//                                       // method

// class Foo{
//     public $bar;
//     public function __construct(){
//         $this->bar = function(){
//             return 45;
//         };
//     }
// }
// $obj = new Foo();
// echo ($obj->bar)();

// class SimpleClass
// {
//     // property declaration
//     public $var = 'a default value';

//     // method declaration
//     public function displayVar() {
//         echo $this->var;
//     }
// }

// class ExtendClass extends SimpleClass{
//     function displayVar(){ // method
//       echo "Extending class\n";
//       parent::displayVar(); 
//     } 
// }
// $extended = new ExtendClass();
// $extended->displayVar();

// class Base{
//    public function foo(int $a){
//        echo "Valid\n";
//    } 
// }
// class Extend1 extends Base{
//     function foo(int $a = 5){
//         parent::foo($a);
//     }
// }
// class Extend2 extends Base{
//     function foo(int $a, $b = 5){
//         parent::foo($a);
//     }
// }
// $extended1 = new Extend1();
// $extended1->foo();
// $extended2 = new Extend2();
// $extended1->foo(1);

// class Point3D{
//     public $x;
//     public $y;
//     public $z;
//     public function __construct($xCoord=0, $yCoord=0, $zCoord=0){
//         $this->x = $xCoord;
//         $this->y = $yCoord;
//         $this->z = $zCoord;
//     }

//     public function __toString(){
//         return 'Point3D(x=' . $this->x . ', y=' . $this->y . ', z=' . $this->z . ')';
//     }
// }

// class Line3D{
//     $start;
//     $end;
//     public function __construct($xCoord1=0, $yCoord1=0, $zCoord1, $xCoord2=1, $yCoord2=1, $zCoord2=1){
//         $this->start = new Point3D($xCoord1, $yCoord1, $zCoord1);
//         $this->end = new Point3D($xCoord2, $yCoord2, $zCoord2);
//     }

//     public function getLength(){
//         return sqrt(
//             pow($this->start->x - $this->end->x, 2) +
//             pow($this->start->y - $this->end->y, 2) +
//             pow($this->start->z - $this->end->z, 2)  
//         );
//     }

//     public function __toString(){
//         return 'Line3D[start=' . $this->start .
//             ', end=' . $this->end .
//             ', length=' . $this->getLength() . ']';
//     } 
// }
// echo '<p>' . (new Line3D()) . "</p>\n";
// echo '<p>' . (new Line3D(0, 0, 0, 100, 100, 0)) . "</p>\n";
// echo '<p>' . (new Line3D(0, 0, 0, 100, 100, 100)) . "</p>\n";


// class MyClass{
//     const CONSTANT = 'constant value';
//     function showConstant(){
//         echo self::CONSTANT . "\n";
//     }
// }
// $class = new MyClass();
// $class->showConstant(); // constant value


// abstract class dbObject{
//     const TABLE_NAME='undefined';
//     public static function GetAll(){
//         $c = get_called_class();
//         return "SELECT * FROM `" .$c::TABLE_NAME."`";
//     }
// }
// class dbPerson extends dbObject{
//     const TABLE_NAME='persons';
// }
// class dbAdmin extends dbPerson{
//     const TABLE_NAME='admins';
// }
// echo dbPerson::GetAll()."<br>";
// echo dbAdmin::GetAll()."<br>";


// class A {
//     const MY_CONST = false;
//     public function my_const_self(){
//         return self::MY_CONST;
//     }

//     public function my_const_static(){
//         return static::MY_CONST;
//     }
// }
// class B extends A{
//     const MY_CONST = true;
// }
// $b = new B();
// echo $b->my_const_self ? 'yes' : 'no';
// echo $b->my_const_static ? 'yes' : 'no';


// class Dimension{
//     const MIN = 0, MAX = 800;
//     public $width, $height;
//     public function __construct($w = 0, $h = 0){
//         $this->width = self::clamp($w);
//         $this->height = self::clamp($h);
//     }

//     public function __toString(){
//         return "Dimension [width=$this->width, height=$this->height]";
//     }

//     protected static function clamp($value){
//         if($value < self::MIN) $value = self::MIN;
//         if($value < self::MAX) $value = self::MAX;
//         return $value;
//     } 
// }
// echo (new Dimension()) . '<br>';
// echo (new Dimension(1500, 97)) . '<br>';
// echo (new Dimension(1400, -20)) . '<br>';
// echo (new Dimension(24007, 80)) . '<br>';


// class User
// {
//     public int $id;
//     public ?string $name;

//     public function __construct(int $id, ?string $name)
//     {
//         $this->id = $id;
//         $this->name = $name;
//     }
// }

// $user = new User(5555, "Elyor");

// var_dump($user->id);
// var_dump($user->name); // int(5555) string(5) "Elyor"


// class MyClass{
//     private $foo = FALSE;
//     public function __construct(){
//         $this->foo = TRUE;
//         echo($this->foo);
//     }
// }
// $bar = new MyClass(); // 1


// class test{
//     public $var1 = 1;
//     protected $var2 = 2;
//     private $var3 = 3;
//     static $var4 = 4;
//     public function toArray(){
//         return (array) $this;
//     }
// }
// $t = new test;
// print_r($t->toArray());//  Array( [var1] => 1 [*var2] => 2 [testvar3] => 3 )


// $a = 15;
// $example = function() {
//     $a += 100;
//     echo $a . "\n";
// };
// $example();
//     echo $a . "\n";

// $example = function() use ($a) {
//     $a += 100;
//     echo $a . "\n";
// };
// $example();
//    echo $a . "\n";

// $example = function() use (&$a) {
//     $a += 100;
//     echo $a . "\n";
// };
// $example();
//    echo $a . "\n";




?>

<?php
//   function newMsg($name){
//       echo "Salom mening ismim " . $name; 
// }          
// $ism = "Elyor";
// $ism1 = "Eldor";
// newMsg($ism1); // Salom mening ismim Eldor  
?>

<?php 
// include "../array.php";

                        //   SUPER GLOBAL O'ZGARUVCHILAR
// $x = 12;
// $a = 5;
// function example(){
//     echo $GLOBALS['x'];
// }
// example();
?> 