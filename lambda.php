<?php
// Lambda

class Cart
{
    const  PRICE_BUTTER = 1.00;
    const PRICE_MILK = 3.00;
    const PRICE_EGGS = 6.95;
    protected $product = array();

    public function add($product, $quanlity)
    {

        $this->product[$product] = $quanlity;
    }

    public function getQuanlity($product)
    {

        return isset($this->product[$product]) ? $this->product[$product] : FALSE;
    }

    public function getTax($tax)
    {

        $total = 0.0;

        $callback = function ($quantity, $product) use ($tax, &$total) {

            $pricePerItem = constant(__CLASS__ . '::PRICE_' . strtoupper($product));
            $total += ($pricePerItem * $quantity) * ($tax + 1.0);

        };

        array_walk($this->product, $callback);
        return $total;

    }
}
    $my_cart = new Cart();
    $my_cart->add('BUTTER', 12 );
    $my_cart->add('MILK', 12 );
    echo $my_cart->getTax(0.7);




?>

