<?php

class Cartc
{
    protected $products=[];
    public function __construct()
    {
        if(isset($_COOKIE['cart'])){
            $this->products[]=json_decode($_COOKIE['cart'],true);
        }
        return $this->products;
    }
    protected function getProducts()
    {
        foreach ($this->products as $product) {
            foreach ($product as $item) {
                echo $item . "<br>";
            }
        }
    }
    protected function saveCart(){
        $cart = json_encode($this->products);
        setcookie('cart',$cart,60);
    }
}