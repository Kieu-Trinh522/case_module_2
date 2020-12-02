<?php
require __DIR__."/vendor/autoload.php";
$bookController=new \APP\controller\BookController();
$customerController=new \APP\controller\CustomerController();
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
    case 'homepage':
        $bookController->index();
        break;
    default:
        $bookController->show();
}