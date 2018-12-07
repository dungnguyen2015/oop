<?php
namespace TraitAge;

trait SetGetAge {
    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

class ConNguoi {

    use SetGetAge;


}

$connguoi = new ConNguoi();
$connguoi->setAge(34);
echo $connguoi->getAge();


?>