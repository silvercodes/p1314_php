<?php

use JetBrains\PhpStorm\NoReturn;

require_once '../tools/dd.php';

//class User
//{
//    public string $email = "vasia@mail.com";
//
//    public function show(): void {
//        dump($this->email);
//    }
//
//}
//
//$a = new User();
//$a->email = "petya@mail.com";
//$a->show();
//
//$b = new User();
//
//// !!!!!
//// dump($a == $b);           // true если один тип и одно состояние
//// dump($a === $b);          // true если ссылки указывают на один объект
//
//$c = $a;
//dump($c == $a);
//dump($c === $a);




// ===== ctor / dtor
//class User
//{
////    private int $id;
////    private string $email;
////
////    public function __construct(int $id = 101, string $email = 'vasia@mail.com')
////    {
////        $this->id = $id;
////        $this->email = $email;
////    }
//
//
////    public function __construct(
////        private int $id = 101,
////        private string $email = "no_email"
////    )
////    {}
//
//    function __destruct() {
//        var_dump('destruct');
//    }
//}





// ====== анонимный класс
//$a = new class('vasia@mail.com') {
//    public string $email;
//    public function __construct(string $email)
//    {
//        $this->email = $email;
//    }
//    public function show(): void {
//        dd($this->email);
//    }
//};
//
//$b = new class('vasia@mail.com') {
//    public function __construct(
//        public string $email
//    ) {
//        $this->email = $email;
//    }
//    public function show(): void {
//        dd($this->email);
//    }
//};




// ====== Наследование

//class Unit
//{
//    public string $title;
//    public function __construct(string $title) {
//        $this->title = $title;
//    }
//    public function show() {
//        dump($this->title);
//    }
//}
//
//class Archer extends Unit
//{
//    public int $damage;
//    public function __construct(string $title, int $damage)
//    {
//        parent::__construct($title);
//        // $this->title = $title;
//        $this->damage = $damage;
//    }
//    public function show() {
//        dump("title: $this->title\tdamage: $this->damage");
//    }
//}
//
//class User
//{}
//
//$a = new Archer('Vasia', 150);
//$a->show();
//dump($a instanceof Archer);
//dump($a instanceof Unit);
//dump($a instanceof User);





// ===== interface

//interface ILoggable
//{
//    function log(string $message);
//}
//interface IDrawable
//{
//    function draw();
//}
//
//
//class Product implements ILoggable, IDrawable
//{
//    function log(string $message)
//    {
//        dump("Log: $message");
//    }
//
//    function draw()
//    {
//        dump("Draw");
//    }
//}
//
//function func(IDrawable $writable): void
//{
//
//}
//
//func(new Product());




// ==== abstract class

//abstract class AbstractUnit
//{
//    public int $hp;
//    public function __construct(int $hp) {
//        $this->hp = $hp;
//    }
//    public abstract function render();
//    public function attack() {
//        dump('attack');
//    }
//}
//
//class Warrior extends AbstractUnit
//{
//    public function render()
//    {
//        // TODO: Implement render() method.
//    }
//}
//
//$u = new Warrior(120);



// ==== traits
//trait Render
//{
//    public function render(): void {
//        dump("render from trait $this->title");
//    }
//}
//
//class Unit
//{
//    public function __construct(
//        public string $title
//    ) {}
//    public function render(): void {
//        dump("render from Unit $this->title");
//    }
//}
//
//class Archer extends Unit
//{
//    use Render;
//}
//
//$u = new Archer('Vasia');
//$u->render();




// ==== static

//class User
//{
//    public int $id;
//    private static int $maxId = 120;
//    public function __construct() {
//        $this->id = ++self::$maxId;
//    }
//    public function render() {
//        dump($this->id);
//    }
//    public static function test() {
//        dump("maxId: " . self::$maxId);
//    }
//}
//
//$a = new User();
//$b = new User();
//$c = new User();
//User::test();



// ==== readonly

//class User
//{
//    private const PI = 3.14;
//    public readonly string $role;
//
//    public function test(): void {
//
//    }
//    public function init(string $role) {
//        $this->role = $role;
//    }
//}
//
//readonly class Container
//{
//
//}



// ==== Magic methods
// 1. __construct()

// 2. __destruct()

// 3,4. __set() / __get()
//class Box
//{
//    public array $data = [];
//
//    public function __set($name, $value) {
//        $this->data[$name] = $value;
//    }
//    public function __get($name): mixed {
//        if (isset($this->data[$name]))
//            return $this->data[$name];
//
//        return null;
//    }
//
//}
//
//$a = new Box();
//$a->email = 'vasia@mail.com';
//// dd($a);
//dd($a->email);

// 5. __toString()
//class User
//{
//    public function __construct(
//        public string $name,
//        public int $age
//    ) {}
//
//    public function __toString() {
//        return "<h1>Name: $this->name</h1>";
//    }
//}
//
//$u = new User("Vasia", 23);
//echo $u;


// 6. __call() / __callStatic
//class User
//{
//    public function __call(string $methodName, array $args) {
//        dump($methodName, $args);
//    }
//    public static function __callStatic(string $methodName, array $args) {
//        dump($methodName, $args);
//    }
//}
//
//$a = new User();
//$a->process(123, 'Vasia', [3, 4, 5, 6]);
//User::staticProcess(45);


// 7. __isset() / __unset
//class Box
//{
//    private array $data = [
//        'role' => 'admin',
//    ];
//
//    public function __isset($name): bool {
//        return isset($data['role']);
//    }
//}


// 8. Extra: __sleep() / __wakeup()         __serialize() / __unserialize()
//class User
//{
//
//    public function __construct(
//        public string $email,
//        public string $pass,
//        public int $age,
//    ) {}
//
////    public function __sleep(): array {
////        return ['email', 'age'];
////    }
//    public function __serialize(): array {
//        return [
//            'user_email' => strtoupper($this->email),
//            'user_age' => $this->age
//        ];
//    }
//}
//
//$user = new User('vasia@mail.com', '123123123', 34);
//$data = serialize($user);
//dd($data);




























