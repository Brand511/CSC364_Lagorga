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

    $product_id = $_REQUEST['id'];

    $p = new Product($db);
    $Products = $p->getProduct($product_id);

    // Show the update Products Form
    $form = new updateProductTemplate();
    echo $form->renderStatic();

    // Process form data
    $formData = $_POST;
    echo "<pre>";
    print_r($formData);
    echo "</pre>";
    // die();

    // Create product object and save data to the database
    $u = new Product($db);
    $r = $u->update($formData);


// Load page header
$footer = new mainFooterTemplate();
echo $footer->renderStatic();
