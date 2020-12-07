<?php


namespace APP\model;


class OrderDetailModel
{
    public $database;
    
    public function __construct()
    {
        $db= new DBConnect();
        $this->database=$db->connect();
    }

    public function getOrderDetail()
    {
        $sql='SELECT orders.order_id,books.book_name,orderdetails.unit_price,orderdetails.quantity,orderdetails.discount,shippers.shipper_name FROM orderdetails JOIN books ON orderdetails.book_id=books.book_id JOIN shippers ON orderdetails.shipper_id=shippers.shipper_id JOIN orders ON orderdetails.order_id=orders.order_id ';
        $stmt=$this->database->query($sql);
//        $stmt->bindParam(':id',$id);
        $data=$stmt->fetchAll();
        $array=[];
        foreach ($data as $item){
            $orderDetail= new OrderDetail($item['order_id'],$item['book_name'],$item['unit_price'],$item['quantity'],$item['discount'],$item['shipper_name']);
            $orderDetail->setId($item['id']);
            array_push($array,$orderDetail);
        }
        return $array;
    }
}