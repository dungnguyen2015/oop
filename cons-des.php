<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/8/2018
 * Time: 12:04 AM
 */

    class Khoitao {

        public function Khoitao() {
            echo "H�m kh?i t?o";
        }

        public function __destruct() {

            echo "H�m H?y";
        }

        public function Show() {
            echo "H�m show";
        }
    }
    $khoi = new Khoitao();
    $khoi->Show();

?>