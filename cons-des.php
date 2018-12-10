<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/8/2018
 * Time: 12:04 AM
 */

    class Khoitao {

        public function Khoitao() {
            echo "Hàm kh?i t?o";
        }

        public function __destruct() {

            echo "Hàm H?y";
        }

        public function Show() {
            echo "Hàm show";
        }
    }
    $khoi = new Khoitao();
    $khoi->Show();

?>