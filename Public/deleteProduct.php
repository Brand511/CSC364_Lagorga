<?php


/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'deleteProductTemplete.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

require_once (FS_INCLUDES . 'product.php');


// Load page header
$header = new mainHeaderTemplate();
echo $header->renderStatic();


    // Show the Create Products Form
    $form = new deleteProductTemplate();
    echo $form->render();

    // Process form data
    $formData = $_GET;
    //$formData['created_at'] = date('Y-m-d H:i:s', time());
    // Create User object and save data to the database
    $u = new Product($db);
    echo "<pre>";
    print_r($u);
    echo "</pre>";
    $r = $u->delete($formData['id']);



// Load page header
$footer = new mainFooterTemplate();
echo $footer->renderStatic();