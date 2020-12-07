<?php


namespace APP\model;


class OrderDetail
{
    public $id;
    public $order_id;
    public $book_id;
    public $unit_price;
    public $quantity;
    public $discount;
    public $shipper_id;

    /**
     * OrderDetail constructor.
     * @param $order_id
     * @param $book_id
     * @param $unit_price
     * @param $quantity
     * @param $discount
     * @param $shipper_id
     */
    public function __construct($order_id, $book_id, $unit_price, $quantity, $discount, $shipper_id)
    {
        $this->order_id = $order_id;
        $this->book_id = $book_id;
        $this->unit_price = $unit_price;
        $this->quantity = $quantity;
        $this->discount = $discount;
        $this->shipper_id = $shipper_id;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getBookId()
    {
        return $this->book_id;
    }

    /**
     * @param mixed $book_id
     */
    public function setBookId($book_id): void
    {
        $this->book_id = $book_id;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param mixed $unit_price
     */
    public function setUnitPrice($unit_price): void
    {
        $this->unit_price = $unit_price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getShipperId()
    {
        return $this->shipper_id;
    }

    /**
     * @param mixed $shipper_id
     */
    public function setShipperId($shipper_id): void
    {
        $this->shipper_id = $shipper_id;
    }
}