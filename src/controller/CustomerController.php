<?php


namespace APP\controller;


use APP\model\Customer;
use APP\model\CustomerModel;

class CustomerController
{
    public $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }

    public function display()
    {
        $customers = $this->customerModel->getAllCustomer();
        include_once "src/view/listCustomer.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once 'src/view/addCustomer.php';
        } else {
            $customerName=$_REQUEST['name'];
            $contactTitle=$_REQUEST['contactTitle'];
            $address=$_REQUEST['address'];
            $city=$_REQUEST['city'];
            $phone=$_REQUEST['phone'];
            $newCustomer= new Customer($customerName,$contactTitle,$address,$city,$phone);
            $this->customerModel->addCustomer($newCustomer);
            header('location:index1.php?page=view-customer');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id=$_REQUEST['id'];
            $customer=$this->customerModel->getCustomerById($id);
            include_once 'src/view/editCustomer.php';
        } else {
            $id=$_REQUEST['id'];
            $customer=$this->customerModel->getCustomerById($id);
            $customerName=$_REQUEST['name'];
            $contactTitle=$_REQUEST['contact'];
            $address=$_REQUEST['address'];
            $city=$_REQUEST['city'];
            $phone=$_REQUEST['phone'];
            $newCustomer= new Customer($customerName,$contactTitle,$address,$city,$phone);
//            var_dump($newCustomer);
//            die();
            $this->customerModel->editCustomer($newCustomer,$id);
            header('location:index1.php?page=view-customer');
        }
    }

    public function delete()
    {
        $id=$_REQUEST['id'];
        $this->customerModel->deleteCustomer($id);
        header('location:index1.php?page=view-customer');
    }
}