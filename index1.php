<?php
require __DIR__."/vendor/autoload.php";
$bookController=new \APP\controller\BookController();
$customerController=new \APP\controller\CustomerController();
$orderController=new \APP\controller\OrderController();
$orderDetailController= new \APP\controller\OrderDetailController();
$page=isset($_REQUEST['page'])?$_REQUEST['page']:NULL;
switch ($page){
    case 'add':
        $bookController->add();
        break;
    case'edit':
        $bookController->edit();
        break;
    case 'delete':
        $bookController->delete();
        break;
    case 'view-customer':
        $customerController->display();
        break;
    case 'add-Customer':
        $customerController->add();
        break;
    case 'view-book':
        $bookController->getBookByCategory();
        break;
    case 'edit-customer':
        $customerController->edit();
        break;
    case 'delete-customer':
        $customerController->delete();
        break;
    case 'view-order':
        $orderController->showOrder();
        break;
    case 'add-order':
        $orderController->add();
        break;
    case'list':
        $bookController->show();
        break;
    case 'list-orderDetail':
        $orderDetailController->showOrderDetail();
        break;
    default:
        $bookController->index();
}