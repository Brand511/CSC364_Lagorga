<?php
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Include the HTML layout class
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'descriptionPageTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

require_once (FS_INCLUDES . 'product.php');


$header = new mainHeaderTemplate();
echo $header->renderStatic();

$p = new Product($db);
$products = $p->getProducts();
?>
    <!-- Container -->
    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">

        </div>
    </div>
<?php
$form = new descriptionPageTemplate();
echo $form->data($products)->renderStatic();


$footer = new mainFooterTemplate();
echo $footer->renderStatic();
?>