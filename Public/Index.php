<?php
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Include the HTML layout class
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');

require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

$header = new mainHeaderTemplate();
echo $header->renderStatic();
?>

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="assets/image/PoleVault.jpeg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Pole Vault Book</a>
                        </h4>
                        <h5>$10.99</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam
                            aspernatur!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="assets/image/TeamHoot.jpeg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">TeamHoot Training</a>
                        </h4>
                        <h5>$35-$125</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="assets/image/Skypoles.jpeg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Skypoles</a>
                        </h4>
                        <h5>$400-$674</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="assets/image/Spirits.jpeg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Spirits Poles</a>
                        </h4>
                        <h5>$400-$692</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="assets/image/ESSX.jpeg" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">ESSX Poles</a>
                        </h4>
                        <h5>$375-$625</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-8">
                <h2>Welcome</h2>
                <p>This is a PoleVault Community that orders poles, training programs, and Pole Vault pits to allow better access for many high school, college, and olympic facilities
                    to host events, meets, practices, etc. to create a community in the United States.
                </p >
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

<?php
$footer = new mainFooterTemplate();
echo $footer->renderStatic();
?>