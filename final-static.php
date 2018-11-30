<!--

 Static l� th�nh ph?n t?nh
 n� nh? bi?n to�n c?c v� ???c cho gi� tr? sau c�ng d� cho x? l� m?t file b?t k? (trong cung 1 chuong tr�nh)
 N� ???c l?u gi� tr? sau c�ng m� n� ???c th?c hi?n sau c�ng trong l?p

 -->

<?php

    Class ConNguoi {

        public static $name = "The first";

        public static function setName($name){

            static::$name = $name;
        }

        public static function getName() {

            return static::$name;
        }
    }

    class NguoiLon extends ConNguoi{

        public static function getName() {
            return parent::getName();

        }
    }
    $connguoi = new ConNguoi();
    $connguoi->setName("nguyen van dung");
    echo $connguoi->getName();
    echo "</br>";
    $connguoi1 = new ConNguoi();
    echo $connguoi1->getName();
    echo "</br>";

    $nguoilon = new NguoiLon();
    $nguoilon->setName("Hoang");
    echo $nguoilon->getName();
    echo "</br>";
    echo $connguoi->getName();

    // Final c� � nghia l� sau c�ng kh�ng m?t l?p k? th�a v� ph??ng th�c kh�ng th? ghi ?�

    final class TreEm {

        final function show() {

        }
    }


?>