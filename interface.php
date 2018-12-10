<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/10/2018
 * Time: 10:31 AM
 */

interface ConNguoiA {

    const name = 'dung';

    public function show();
    public function talk();
}

interface ConNguoiB extends ConNguoiA {

    public function noi();

}

abstract class Dung implements ConNguoiB{

    abstract public function noi2();
    public function noi(){

    }

    public function talk() {
        echo "Abstract Class";
    }
}

class Child extends Dung{

    public function noi2(){
        echo "Noi 2";
    }
    public function show(){
        echo "Noi 2";
    }
    public function talk(){

        echo parent::talk();
    }
}
$an = new Child();
$an->talk();