<?php


namespace APP\model;


class Customer
{
    public $id;
    public $customer_name;
    public $contact_title;
    public $address;
    public $city;
    public $phone;

    /**
     * Customer constructor.
     * @param $customer_name
     * @param $contact_title
     * @param $address
     * @param $city
     * @param $phone
     */
    public function __construct($customer_name, $contact_title, $address, $city, $phone)
    {
        $this->customer_name = $customer_name;
        $this->contact_title = $contact_title;
        $this->address = $address;
        $this->city = $city;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * @param mixed $customer_name
     */
    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;
    }

    /**
     * @return mixed
     */
    public function getContactTitle()
    {
        return $this->contact_title;
    }

    /**
     * @param mixed $contact_title
     */
    public function setContactTitle($contact_title)
    {
        $this->contact_title = $contact_title;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}