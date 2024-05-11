<?php

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

abstract class AbstractUnit
{
    public int $hp;
    public function __construct(int $hp) {
        $this->hp = $hp;
    }
    public abstract function render();
    public function attack() {
        dump('attack');
    }
}

class Warrior extends AbstractUnit
{
    public function render()
    {
        // TODO: Implement render() method.
    }
}

$u = new Warrior(120);












