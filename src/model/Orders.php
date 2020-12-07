<?php


namespace APP\model;


class Orders
{
    public $id;
    public $customer_id;
    public $order_date;
    public $required_date;
    public $shipped_date;

    /**
     * Orders constructor.
     * @param $customer_id
     * @param $order_date
     * @param $required_date
     * @param $shipped_date
     */
    public function __construct($customer_id, $order_date, $required_date, $shipped_date)
    {
        $this->customer_id = $customer_id;
        $this->order_date = $order_date;
        $this->required_date = $required_date;
        $this->shipped_date = $shipped_date;
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
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @param mixed $order_date
     */
    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;
    }

    /**
     * @return mixed
     */
    public function getRequiredDate()
    {
        return $this->required_date;
    }

    /**
     * @param mixed $required_date
     */
    public function setRequiredDate($required_date)
    {
        $this->required_date = $required_date;
    }

    /**
     * @return mixed
     */
    public function getShippedDate()
    {
        return $this->shipped_date;
    }

    /**
     * @param mixed $shipped_date
     */
    public function setShippedDate($shipped_date)
    {
        $this->shipped_date = $shipped_date;
    }
}