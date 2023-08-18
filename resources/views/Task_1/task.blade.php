<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-1</title>
</head>
<body>
<h2>Answer:</h2>
@php

  class Shape{

    public $length;
    public $width;
    public $radius;

  public function getRectangleArea()
  {
      return $this->length * $this->width;
  }

  public function getCircleArea()
  {
      return $PI* $this->$radius*$this->$radius;
  }
}

class Rectangle extends Shape{};
class Circle extends Shape{};

$rectangle = new Rectangle;
$rectangle->height = 5;
$rectangle->width = 10;
var_dump($rectangle->getRectangleArea());   // 50

$circle = new Circle;
$circle->$radius= 7;
var_dump($circle->getCircleArea())     //153.938


@endphp

</body>
</html>
