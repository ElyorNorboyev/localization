<?php
// class foo{
//     function do_foo(){
//         echo "Hello World Elyor";
//     }
// } 

// $f = new foo;
// $f->do_foo(); // Hello World Elyor


// class MyClass{
//     const ABC = array('A', 'B', 'C');
//     const A = '1';
//     const B = '2';
//     const C = '3';
//     const NUMBERS = array(  
//         self::A,
//         self::B,
//         self::C,
//     );
// }
// var_dump(MyClass::ABC);
// var_dump(MyClass::NUMBERS);


// class BaseClass{
//     function __construct(){
//         print "In BaseClass constructor\n";
//     }
// }

// class SubClass extends BaseClass{
//     function __construct(){
//         parent::__construct();
//         print "In SubClass constructor\n";
//     }
// }

// class OtherSubClass extends BaseClass{

// }
// $Obj = new BaseClass();
// echo "<br>";
// $obj = new SubClass();
// echo "<br>";
// $obj = new OtherSubClass();


// class Point{
//    protected int $x;
//    protected int $y;
//    public function __construct(int $x, int $y = 0){
//        $this->x = $x;
//        $this->y = $y;
//        return ($this->x + $this->y);
//    }  
// }
// $p1 = new Point(4, 5);
// $p2 = new Point(4);
// $p3 = new Point(y: 5, x: 4);


?>

<!-- Object Cloning -->
<!-- class Class_Name{ -->
 <!-- Property declarations defined here -->
 <!-- Method declarations defined here  -->
<!-- } -->


<?php
// Public Properties->(Ommaviy)(public bu class dan tashqarida ham murojaat qilishi mumkin bo'lgan xususiyat)
// class Employee{
//     public $name;
// }
// $employee = new Employee();
// $employee->username = "Norboyev Elyor";
// $username = $employee->username;
// echo "New Employee: $username"; // New Employee: Norboyev Elyor


// class User{
//     public $first_name;
//     public $last_name;
//     public function __construct($first, $last){
//         $this->first_name = $first;
//         $this->last_name = $last;
//     }

//     public function __toString(){
//         return "User [first_name = '$this->first_name', last_name = '$this->last_name']";
//     }
// }
// $user_1 = new User('John', 'Doe');
// $user_2 = new User('Jane', 'Doe');
// echo $user_1 . '<br>'; 
// echo $user_2 . '<br>'; // User [first = 'John', last = 'Doe']
                       // User [first = 'Jane', last = 'Doe']


// class Foo{
//     public $a = "I'm a!";
//     public $b = "I'm b!";

//     public function getB(){
//         return $this->b;
//     }
// }
// print (new Foo)->a;
// echo "<br>";
// print (new Foo)->getB(); // I'm a!
                        //  I'm b!

?>

<?php
// Private Properties->(manosi Xususiy)(Xususiy xususiyatlarga faqat ular aniqlangan sinf ichidan kirish mumkin.)
// class Employee
// {
//  private $name;
//  private $telephone;
// }

// class Employee{
//     private $name;
//     public function setName($name){
//     $this->name = $name;
//     }
// }
// $e = new Employee;
// $e->setName("Elyor");


// class Employee {
//     private $name;
//     private $title;
//     public function getName(){
//         return $this->name;
//     }

//     public function setName($name){
//         $this->name = $name;
//     }

//     public function sayHello(){
//         echo "Hi, my name is {$this->getName()}.";
//     }
// }
// $emp = new Employee();
// $emp->getName();
// $emp->setName("Elyor");
// $emp->sayHello(); // Hi, my name is Elyor.


// class Employee{
    // private $employeeid;
    // private $tiecolor;

//     function setEmployeeID($employeeid){
//         $this->employeeid = $employeeid; 
//     }

//     function getEmployeeID(){
//         return $this->employeeid;
//     }

//     function setTieColor($tiecolor){
//         $this->tiecolor = $tiecolor;
//     }

//     function getTieColor(){
//         return $this->tiecolor;
//     }
// }              

// $employee1 = new Employee();
// $employee1->setEmployeeID("12345");
// $employee1->setTieColor("red");
// $employee2= clone $employee1;
// $employee2->setEmployeeID("67890");

// printf("Employee 1 employeeID: %d <br/>", $employee1->getEmployeeID());
// printf("Employee 1 tie color: %s <br />", $employee1->getTieColor());
// printf("Employee 2 employeeID: %d <br />", $employee2->getEmployeeID());
// printf("Employee 2 tie color: %s <br />", $employee2->getTieColor());

// Employee1 employeeID: 12345
// Employee1 tie color: red
// Employee2 employeeID: 67890
// Employee2 tie color: red


// class Employee {
//     private $name;
//     function setName($name){
//         $this->name = $name;
//     }
//     function getName(){
//         return $this->name;
//     }
// }

// $emp1 = new Employee();
// $emp1->setName('Elyor Norboyev');
// $emp2 = $emp1;
// $emp2->setName('Eldor Sherboyev');
// echo "Employee 1 = {$emp1->getName()}\n";
// echo "<br>";
// echo "Employee 2 = {$emp2->getName()}\n";
// Employee 1 = Eldor Sherboyev
// Employee 2 = Eldor Sherboyev


// class Foo{
//     private $name;
//     private $link;
//     public function __construct($name){
//         $this->name = $name;
//     }

//     public function setLink(Foo $link){
//         $this->link = $link;
//     }

//     public function __destruct(){
//         echo 'Destroying: ', $this->name;
//     }
// }                                      
// $foo = new Foo('Foo 1');
// $bar = new Foo('Foo 2');
// $foo->setLink($bar);
// $bar->setLink($foo); // Destroying: Foo 1Destroying: Foo 2


// class Employee{
//     private $name;
//     function setName($name){
//         if($name == "")
//         echo "Ism bo'sh bo'lishi mumkin emas!";
//         else $this->name = $name;
//     }

//     function getName(){
//         return "My name is " . $this->name."<br/>";
//     }
// } // end Employee class


// class Executive extends Employee{
//     function pillageCompany(){
//         echo "Men yaxtamni moliyalashtirish uchun kompaniya aktivlarini sotaman!";
//     }
// } // end Executive class

// $exec = new Executive();
// $exec->setName("Elyor");
// echo $exec->getName();
// $exec->pillageCompany();
?>

<?php
// Protected Properties=>(Himoyalangan xususiyatlar)
// (Himoyalangan xususiyatlar, shuningdek, kirish uchun meros qilib olingan sinflarga taqdim etiladi)

// class Employee
// {
//  protected $wage;
// }
// class Programmer extends Employee
// {
//  public function bonus($percent) {
//  echo "Bonud = " . $this->wage * $percent / 100;
//  }
// }
// $empl = new Programmer();
// $empl->bonus("1000");


// class A {
//     protected $id;

//     public function __construct($id)
//     {
//         $this->id = $id;
//         echo "construct {$this->id}\n";
//     }

//     public function __destruct()
//     {
//         echo "destruct {$this->id}\n";
//     }
// }

// $a = new A(3);
// echo "-------------\n";
// echo "<br>";
// $aa = new A(5);
// echo "=============\n";
// echo "<br>";


// class Point {
//     protected int $x;
//     protected int $y;

//     public function __construct(int $x, int $y = 0) {
//         $this->x = $x;
//         $this->y = $y;
//         echo $this->x + $this->y;
//     }
// }
// $p1 = new Point(4, 5);
// echo "<br>";
// $p2 = new Point(4);
// echo "<br>";
// $p3 = new Point(y: 5, x: 4);


// class MyDestructableClass{
//     function __construct(){
//         print "In constructor\n";
//     }

//     function __destruct(){
//         print "Destroying " . __CLASS__ . "\n";
//     }
// }
// $obj = new  MyDestructableClass(); // In constructor 
                                   // Destroying 
                                   // MyDestructableClass
?>

<!-- Getter_Setter -->

<?php
// class Employee{
//     public $name;
//     function __set($propName, $propValue){
//         echo "Noexistent variable: \$$propName!";
//     }
// }
// $employee = new Employee;
// $employee->name = "Elyor";
// $employee->title = "Executive Chef"; // Noexistent variable: $title!


// class Employee{
//     public function __set($propName, $propValue){
//         $this->$propName = $propValue;
//     }
// }
// $employee = new Employee;
// $employee->name = "Elyor";
// $employee->title = "EXEcutive Chef";
// echo "Name: {$employee->name} <br/>";
// echo "Title: {$employee->title}"; // Name: Elyor
                                  // Title: EXEcutive Chef


// class Employee{
//     public $name;
//     public $city;
//     protected $wage;
//     public function __get($propName){
//         echo "__get called! <br/>";
//         $vars = array("name", "city");
//         if (in_array($propName, $vars)){
//             return $this->$propName;
//         }else{
//             return "No such variable!";
//         }
//     }
// }
// $employee = new Employee();
// $employee->name = "Elyor";
// echo "{$employee->name}<br/>";
// echo $employee->age; // Elyor
                        //__get called!
                        // No such variable!


// class Employee{
//     private $name;

//     // Getter

//     public function getName(){
//         return $this->name;
//     }

//     // Setter

//     public function setName($name){
//         $this->name = $name;
//     }
// }
// $emp = new Employee;
// $emp->getName();
// $emp->setName("Elyor");
?>


<?php
// Declaring Methods

// public function calculateSalary(){
//     return $this->wage * $this->hours;
// }

// Invoking Methods

// $employee = new Employee("Janie");
// $salary = $employee->calculateSalary();


// Public Methods

// class Visitor{
//     public function greetVisitor(){
//         echo "Hello!";
//     }
// }
// $visitor = new Visitor();
// $visitor->greetVisitor(); // Hello!

?>

<?php
// class Employee{
//     private $name;
//     private $salary; // salary(ish haqi)

//     function setName($name){
//         $this->name = $name;
//     }

//     function setSalary($salary){
//         $this->salary = $salary;
//     }

//     function getSalary(){
//         return $this->salary;
//     }
// }

// class Executive extends Employee {
//     function pillageCompany() {
//     $this->setSalary($this->getSalary() * 10);
//     }
// }

// class CEO extends Executive{
//     function getFacelift(){
//         echo "Hi! <br>";
//     }
// }
// $ceo = new CEO();
// $ceo->setName("Bernie");
// $ceo->setSalary("100000");
// $ceo->pillageCompany();
// $ceo->getFacelift();
// echo "Bernining ish haqi: {$ceo->getSalary()}\n";


?>







































