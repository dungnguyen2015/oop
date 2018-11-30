<!--

 Static là thành ph?n t?nh
 nó nh? bi?n toàn c?c và ???c cho giá tr? sau cùng dù cho x? lý m?t file b?t k? (trong cung 1 chuong trình)
 Nó ???c l?u giá tr? sau cùng mà nó ???c th?c hi?n sau cùng trong l?p

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

    // Final có ý nghia là sau cùng không m?t l?p k? thùa và ph??ng thúc không th? ghi ?è

    final class TreEm {

        final function show() {

        }
    }


?>