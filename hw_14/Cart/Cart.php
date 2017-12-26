<?php
class Cart
{
    protected $products=[];
    public $pdo;
    public function __construct()
    {
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=cart', 'jokes_member', '123');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET NAMES 'utf8' ");
        }catch (PDOException $e){
            die('Can\'t connect to Data Base!<br>'.$e->getMessage());
        }
        $this->pdo=$pdo;

        if(isset($_COOKIE['cart'])){
            $this->products[]=json_decode($_COOKIE['cart'],true);
        }
        return $this->products;
    }
    public function getProducts()
    {
        $sql = 'SELECT * FROM cart';
        $result = $pdo->query($sql);
        $this->products[] = $result->fetchAll($result);
        var_dump($this->products);
        foreach ($this->pdo as $product){
            foreach ($product as $item)
            echo $item."<br>";
        }
    }
    public function saveCart()
    {
        $cart = json_encode($this->products);
        setcookie('cart',$cart,60);
    }
    public function addProduct($name,$description,$cost,$currency)
    {
        $sql = 'INSERT INTO cart(name,description,cost,currency) VALUES (".$name.",".$description.",".$cost.",".$currency.")';
        $this->pdo->query($sql);
        $this->products[]=$this->pdo;
    }
}