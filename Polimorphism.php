<?php
// Interface Shape
interface Shape {
    public function calculateArea();
}

// Class Circle implementing Shape interface
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Class Rectangle implementing Shape interface
class Rectangle implements Shape {
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

// Function to calculate total area of shapes
function calculateTotalArea(array $shapes) {
    $totalArea = 0;
    foreach ($shapes as $shape) {
        $totalArea += $shape->calculateArea();
    }
    return $totalArea;
}

// Create instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Array of shapes
$shapes = [$circle, $rectangle];

// Calculate total area of shapes
$totalArea = calculateTotalArea($shapes);
echo "Total area of shapes: " . $totalArea;
?>