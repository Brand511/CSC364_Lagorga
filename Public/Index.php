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
                    <li ><a href = "https://www.westminster.edu/index.cfm" > Westmister College</a ></li >
                    <li ><a href = "https://www.norwinsd.org/highschool" > Norwin School District</a ></li >
                    <li ><a href = "http://www.geneva.edu/" > Geneva College</a ></li >
                    <li ><a href = "https://www.hasdpa.net/" > Hempfield School District </a ></li >
                </ol >
                </p >
            </div >

        </div >
    </div > <!-- /container-->
    <div class="container">
        <h1>Products</h1>
        <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
        <div id="products" class="row list-group">
            <?php
            //get rows query
            $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    ?>
                    <div class="item col-lg-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                                <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-success" href="actionCart.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } }else{ ?>
                <p>Product(s) not found.....</p>
            <?php } ?>
        </div>
    </div>
    </body>
    </html>
    <!-- /.row -->
<?php
$form = new productShowTemplate();
echo $form->data($products)->renderList();
?>
<?php
$footer = new mainFooterTemplate();
echo $footer->renderStatic();
?>