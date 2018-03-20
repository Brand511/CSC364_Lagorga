<?php

require_once (FS_TEMPLATES . 'templateEngine.php');


class deleteProductTemplate extends templateEngine {


    public function __construct(){

        $temp = <<<HTML
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                <h2>Delete this Product</h2>
                    <form class="form-horizontal" action="/deleteProduct.php" method="POST">
                      <div class="form-group row">
                        <div class="col-xs-offset-4 col-xs-8">
                          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>        
HTML;

        $this->template = $temp;
    }


}