<?php

require_once (FS_TEMPLATES . 'templateEngine.php');


class createSupplierTemplate extends templateEngine {


    public function __construct(){

        $temp = <<<HTML
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                <h2>Create a New Supplier</h2>
                    <form class="form-horizontal" action="/createSupplier.php" method="POST">
                      <div class="form-group">
                        <label for="name" class="control-label col-xs-4">Name</label>
                        <div class="col-xs-8">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-address-card"></i>
                            </div>
                            <input id="name" name="name" type="text" class="form-control" required="required">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone" class="control-label col-xs-4">Phone</label>
                        <div class="col-xs-8">
                          <input id="phone" name="phone" placeholder="724-123-1234" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-xs-4">Email Address</label>
                        <div class="col-xs-8">
                          <input id="email" name="email" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="contact_name" class="control-label col-xs-4">Contact Name</label>
                        <div class="col-xs-8">
                          <input id="contact_name" name="contact_name" type="text" class="form-control" aria-describedby="contact_nameHelpBlock">
                          <span id="contact_nameHelpBlock" class="help-block">Enter the name of your corporate contacts</span>
                        </div>
                      </div>
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