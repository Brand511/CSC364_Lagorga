<?php


/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'updateProductTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

require_once (FS_INCLUDES . 'product.php');


// Load page header
$header = new mainHeaderTemplate();
echo $header->renderStatic();


if ($requestType == 'GET') {
    // Get the product_id that was passed in
    // 'http://csc206dev.com/updateProduct.php?id=1'
    $product_id = $_REQUEST['id'];
    $product = new Product($db);
    $u = $product->getProduct($product_id);
    //print_r($u); //die();
    // Show the Update User Form
    $form = new updateProductTemplate($u);
    echo $form->render();
} else {
    // Process form data
    $formData = $_POST;
    //echo "<pre>";
    //print_r($formData);
    //echo "</pre>";
    // die();

    // Create User object and save data to the database
    $u = new Product($db);
    $r = $u->update($formData);
    // When done, redirect to a web page
    header('Location: http://csc364dev.com/index.php');
}
// Load page header
$footer = new mainFooterTemplate();
echo $footer->renderStatic();
