<?php
include_once ("shape.php");
include_once ("circle.php");
include_once ("cylinder.php");
include_once ("rectangle.php");
include_once ("square.php");
use shape\Shape;
use circle\Circle;
use cylinder\Cylinder;
use Rectangle\Rectangle;
use square\Square;
$obj=[];
$objShape=new Shape("shape");
$objCircle=new Circle("Circle",10);
$objCylinder=new Cylinder("Cylinder",15,20);
$objRectangle=new Rectangle("Rectangle",10,20);
$objSquare=new Square("Square",10,10);
$obj[] = $objShape;
$obj[] = $objCircle;
$obj[] = $objCylinder;
$obj[] = $objRectangle;
$obj[] = $objSquare;
echo "<pre>";
print_r($obj);
echo "</pre>";
echo $objSquare->setdientich();