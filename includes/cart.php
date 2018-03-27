<?php

class Cart
{

    /*
     * shopping cart contents
     */
    public $items = null;

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        getCart();
    }

    /**
     *  add item to Shopping Cart
     */
    public function add($newItem)
    {
        // see if item is already in cart
        // if yes, increment qty
        if ($this->items == 1)
        {
            $this->changeQty();
            $this->saveCart();
        }
        else {
            //if not, just add to the items list
            $this->items[] = $newItem;
            $this->saveCart();
        }
    }
    /*
     * get the content of the cart
     */
    public function get()
    {
        // get the cart
        // return cart contents to the script
        return getCart();
    }
    /*
     * delete item from cart
     */
    public function delete($id)
    {

    }
    /*
     * change quantity of an item in the cart
     */
    public function changeQty($id, $newQty)
    {

    }

    /*
     * calculate total
     */
    public function calculateTotal()
    {

    }
    /*
     * this will get the cart from the Session Variable
     */
    private function getCart()
    {
        if(array_key_exists('cart', $_SESSION)) {
            $this->items = $_SESSION['cart'];
        }

        return;
    }

    private  function saveCart()
    {
        $_SESSION['cart'] = $this->items;
    }


}