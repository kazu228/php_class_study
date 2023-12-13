<?php 
require_once 'TriangleFigure.php';

$tri = new TriangleFigure();
$tri->base = -10;
$tri->height = 20;

print '三角形の面積';
print $tri->getArea();

