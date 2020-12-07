<?php


namespace APP\controller;


use APP\model\OrderDetailModel;

class OrderDetailController
{
    public $orderDetailModel;

    public function __construct()
    {
        $this->orderDetailModel= new OrderDetailModel();
    }

    public function showOrderDetail()
    {
        $orderDetails=$this->orderDetailModel->getOrderDetail();
        include_once 'src/view/listOrderDetail.php';
    }
}