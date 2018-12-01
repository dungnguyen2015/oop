<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/1/2018
 * Time: 11:08 PM
 */

// Cach 1;
include 'final-static.php';
$connguoi = new ConNguoi\ConNguoi();

echo "</br>";
echo $connguoi->getName();
echo "</br>";
// cach 2
use ConNguoi\ConNguoi;
$connguoi1 = new ConNguoi();
echo $connguoi1->getName();