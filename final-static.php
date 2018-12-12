<?php

abstract class ConNguoi {

    protected static $name;
    abstract function getName();
    public function setName($name) {

        self::$name = $name;
    }
}

class Dung extends ConNguoi{

    public function getName() {

        return ConNguoi::$name;
    }
}

$a = new Dung();
$a->setName("Nguyen V?n D?ng");
echo $a->getName();

$b = new Dung();
echo $b->getName();

var_dump(ConNguoi::class);

?>