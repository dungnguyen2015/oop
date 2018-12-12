<?php
namespace TraitAge;

trait Age {

    protected static $name = "nguyen";
    public function setName($name) {

        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

}
class Dung {
    use Age;

}

$connguoi = new Dung();
$connguoi->setName("Nguyên van dung");
echo $connguoi->getName();

?>