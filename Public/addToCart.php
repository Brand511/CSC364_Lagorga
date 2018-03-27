<?php

/* 	Start-up activities prior to loading the page content.  This will make a connection
     *	to the database and start a session.
     */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

// get item into to add to cart
// this will come from a form submission via Post request
// id would be found in $_Post['id']
$newItem = $_POST;

// initialize cart and get current contents
$cart = new Cart();

// add an item to the cart
$cart->add($newItem);

redirect('/showCart.php');
