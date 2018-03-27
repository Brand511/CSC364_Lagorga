<?php


/* 	Start-up activities prior to loading the page content.  This will make a connection
 *	to the database and start a session.
 */
require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

// Include the template files needed for the page
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'productTableTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

require_once (FS_INCLUDES . 'product.php');

// Load page header
$header = new mainHeaderTemplate();
echo $header->renderStatic();

    $p = new Product($db);
    $products = $p->getProducts();
?>
    <table>
        <thead>
        <tr>
            <th>Number</th>
            <th>Product</th>
            <th>Price</th>
            <th>sku</th>
            <th>update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
    // Show the Create Products table Form
    $form = new productTableTemplate();
    echo $form->data($products)->renderList();


?>
        </tbody>
    </table>
<?php
// Load page header
$footer = new mainFooterTemplate();
echo $footer->renderStatic();