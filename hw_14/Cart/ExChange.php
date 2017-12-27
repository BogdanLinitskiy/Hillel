<?php

namespace Cart;

class ExChange
{
    public function convert(){
        $cart = new Cart();
        $cart->getProducts();
    }
}