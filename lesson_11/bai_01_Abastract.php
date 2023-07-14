<?php
echo "<b>BÀI 1</b><br>";
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(10);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(10, 10);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea() . "<br>";

echo "<b>BÀI 2</b><br>";
abstract class Animal {
    abstract public function makeSound();
}
class dog extends Animal {
    public function makeSound(){
        return "gầu gấu gâu gầu gâu";
    }
}
class cat extends Animal {
    public function makeSound(){
        return "mèo méo meo mèo meo";
    }
}

$dog = new dog();
echo "tiếng chó kêu là: " .$dog->makeSound()."<br>";
$cat = new cat();
echo "tiếng chó kêu là: " .$cat->makeSound()."<br>";

echo "<b>BÀI 3</b><br>";

echo "<b>BÀI 4</b><br>";
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        return "Car started!";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        return "Motorcycle started!";
    }
}

// Sử dụng các lớp đã triển khai
$car = new Car();
echo $car->start() . "<br>";

$motorcycle = new Motorcycle();
echo $motorcycle->start() . "<br>";
