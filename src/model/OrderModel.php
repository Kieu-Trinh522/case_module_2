<?php


namespace APP\model;


class OrderModel
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllOrder()
    {
        $sql = "SELECT orders.order_id, customers.customer_name,orders.order_date,orders.required_date,orders.shipped_date FROM orders JOIN customers ON orders.customer_id=customers.customer_id";
        $stmt=$this->database->query($sql);
        $data=$stmt->fetchAll();
        $array=[];
        foreach ($data as $item){
            $order= new Orders($item['customer_name'],$item['order_date'],$item['required_date'],$item['shipped_date']);
            $order->setId($item['order_id']);
            array_push($array,$order);
        }
        return $array;
    }

    public function getOrderById($id)
    {
        $sql='SELECT * FROM orders INNER JOIN customers ON orders.customer_id=customers.customer_id WHERE orders.order_id=:order_id';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':order_id',$id);
        $stmt->execute();
        $item=$stmt->fetch();
        $order= new Orders($item['customer_name'],$item['order_date'],$item['required_date'],$item['shipped_date']);
        $order->setId($item['order_id']);
        return $order;
    }

    public function addOrder($order)
    {
        $sql="INSERT INTO `orders`(`customer_id`, `order_date`, `required_date`, `shipped_date`) VALUES (?,?,?,?)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(1,$order->getCustomerId());
        $stmt->bindParam(2,$order->getOrderDate());
        $stmt->bindParam(3,$order->getRequiredDate());
        $stmt->bindParam(4,$order->getShippedDate());
        $stmt->execute();
    }
}