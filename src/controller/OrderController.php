<?php


namespace APP\controller;


use APP\model\CategoryModel;
use APP\model\CustomerModel;
use App\model\Order;
use APP\model\OrderModel;
use APP\model\Orders;

class OrderController
{
    public $orderModel;
    public $customerModel;
    
    public function __construct()
    {
        $this->orderModel=new OrderModel();
        $this->customerModel=new CustomerModel();

    }

    public function showOrder()
    {
        $orders=$this->orderModel->getAllOrder();
        include_once "src/view/listOrder.php";
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD']=="GET"){
            $customers=$this->customerModel->getAllCustomer();
            include_once 'src/view/addOrder.php';
        }else{
            $customerName=$_REQUEST['name'];
            $orderDate=$_REQUEST['order'];
            $RequiredDate=$_REQUEST['required'];
            $shippedDate=$_REQUEST['shipped'];
            $order= new Orders($customerName,$orderDate,$RequiredDate,$shippedDate);
//            var_dump($order);
//            die();
            $this->orderModel->addOrder($order);
            header('location:index1.php?page=view-order');
        }
    }
}