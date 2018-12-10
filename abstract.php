<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/10/2018
 * Time: 9:41 AM
 */


    abstract class ConNguoi {

        protected $name;

        abstract function go();
        public function show(){

            echo "function show";
        }

    }

    abstract class talk extends ConNguoi{

    }

    class dung extends talk {

        public function go() {

            echo "function go";
        }
    }

    $a = new dung();
    $a->show();
    echo "<br/>";
    $a->go();
