<?php
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Include the HTML layout class
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'productShowTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

require_once (FS_INCLUDES . 'product.php');


$header = new mainHeaderTemplate();
echo $header->renderStatic();

$p = new Product($db);
$products = $p->getProducts(0);
?>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome</h2>
                <p>This is a PoleVault Community that orders poles, training programs, and Pole Vault pits to allow better access for many high school, college, and olympic facilities
                    to host events, meets, practices, etc. to create a community in the United States.
                </p >
                <h2>Products</h2>
                <p>We have our products listed down below.</p>
            </div >
            <div class="col-md-4" >
                <h2 > List of known Facilities </h2 >
                <p > That became Founders of this Community:
                <ol >
                    <li ><a href = "#" > Westmister College</a ></li >
                    <li ><a href = "#" > Norwin School District</a ></li >
                    <li ><a href = "#" > Geneva College</a ></li >
                    <li ><a href = "#" > Hempfield School District </a ></li >
                </ol >
                </p >
            </div >

        </div >
    </div > <!-- /container-->

    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">

        </div>
    </div>
    <!-- /.row -->
<?php
$form = new productShowTemplate();
echo $form->data($products)->renderList();
?>
<?php
$footer = new mainFooterTemplate();
echo $footer->renderStatic();
?>