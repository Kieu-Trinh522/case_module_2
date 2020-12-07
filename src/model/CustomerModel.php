<?php


namespace APP\model;


class CustomerModel
{
    public $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCustomer()
    {
        $sql = 'SELECT * FROM customers';
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $item) {
            $customer = new Customer($item['customer_name'], $item['contact_title'], $item['address'], $item['city'], $item['phone']);
            $customer->setId($item['customer_id']);
            array_push($array, $customer);
        }
        return $array;
    }

    public function addCustomer($customer)
    {
        $sql='INSERT INTO `customers`(`customer_name`, `contact_title`, `address`, `city`, `phone`) VALUES (:customer_name,:contact_title,:address,:city,:phone)';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':customer_name',$customer->getCustomerName());
        $stmt->bindParam(':contact_title',$customer->getContactTitle());
        $stmt->bindParam(':address',$customer->getAddress());
        $stmt->bindParam(':city',$customer->getCity());
        $stmt->bindParam(':phone',$customer->getPhone());
        $stmt->execute();
    }

    public function getCustomerById($id)
    {
        $sql="SELECT * FROM customers WHERE customer_id=:customer_id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':customer_id',$id);
        $stmt->execute();
        $item =$stmt->fetch();;
        $customer = new Customer($item['customer_name'], $item['contact_title'], $item['address'], $item['city'], $item['phone']);
        $customer->setId($item['customer_id']);
        return $customer;

    }

    public function editCustomer($customer,$_id)
    {
        $sql="UPDATE `customers` SET `customer_name`=:customer_name,`contact_title`=:contact_title,`address`=:address,`city`=:city,`phone`=:phone WHERE customer_id=:customer_id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':customer_name',$customer->getCustomerName());
        $stmt->bindParam(':contact_title',$customer->getContactTitle());
        $stmt->bindParam(':address',$customer->getAddress());
        $stmt->bindParam(':city',$customer->getCity());
        $stmt->bindParam(':phone',$customer->getPhone());
        $stmt->bindParam(':customer_id',$_id);
        $stmt->execute();

    }

    public function deleteCustomer($id)
    {
        $sql='DELETE FROM customers WHERE customer_id=:customer_id';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':customer_id',$id);
        $stmt->execute();
    }
}