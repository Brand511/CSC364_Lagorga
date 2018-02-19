<?php

/* 	Start-up activities prior to loading the page content.  This will make a connection
     *	to the database and start a session.
     */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'createSupplierTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');


// Load page header
$header = new mainHeaderTemplate();
echo $header->renderStatic();

// Process form data OR display blank form

if ($requestType == 'GET') {
    // Display the form
    $form = new createSupplierTemplate();
    echo $form->renderStatic();

} else {
    // Request will be POST and therefore should have form data with it
    // Form data will be in the $_POST[] super global variable
    $r = $_POST;

    // Save the data to MySQL - not a complete form but shows the concept
    $sql = "insert into suppliers (name, phone, email, contact_name) VALUES ('{$r['name']}', '{$r['phone']}', '{$r['email']}', '{$r['contact_name']}')";

    // This saves the data. Need to add the error checking here.
    $db->query($sql);

    // If successful, where to we redirect them to?
    header('Location: http://csc364dev.com/index.php');

}





// Load page header
$footer = new mainFooterTemplate();
echo $footer->renderStatic();
