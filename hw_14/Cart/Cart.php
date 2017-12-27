<?php

namespace Cart;

class Cart
{
    protected $products=[];
    public $cart;
    public function __construct()
    {
        if(isset($_COOKIE['cart'])){
            $this->products[]=json_decode($_COOKIE['cart'],true);
        }
        return $this->products;
    }
    public function getProducts()
    {
        foreach ($this->products as $product) {
            foreach ($product as $item) {
                if(!is_array($item)) {
                    echo $item . "<br>";
                }
            }
        }
    }
    public function saveCart()
    {
        setcookie('cart',json_encode($this->products),time()+1);
    }
    public function addProduct($name,$description,$cost,$currency)
    {
        $this->products[]=['name' => $name,
                            'description'=>$description,
                            'cost' => $cost,
                            'currency' =>$currency];
    }
}