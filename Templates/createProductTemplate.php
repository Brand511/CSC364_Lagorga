<?php

require_once (FS_TEMPLATES . 'templateEngine.php');

class createProductTemplate extends templateEngine {


    public function __construct(){

        $temp = <<<HTML
            <div class="container" >
                <div class="row justify-content-center">
                    <h2>Post a new product</h2>
                </div>
                <div class="row justify-content-center">
                    <form class="col-md-8" action="/createProduct.php" method="POST" >
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label">Product</label>
                            <div class="col-md-3 w-80">                                
                                <input id="name" name="name" placeholder="Name" type="text" class="form-control here" required="required">                                    
                            </div>
                            <div class="col-md-3 w-80">
                                <input id="price" name="price" placeholder="Price" type="text" class="form-control here" required="required">
                            </div>
                            <div class="col-md-3 w-80">
                                <input id="sku" name="sku" placeholder="Sku" type="text" class="form-control here" required="required">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-3 col-form-label" for="description">Description</label>
                            <div class="col-md-14 w-100">
                                <textarea class="form-control" id="description" name="description"> </textarea>
                            </div>
                        </div>
                                                
                        <div class="form-group row">
                            <label for="address1" class="col-md-3 col-form-label">Supplier</label>
                            <div class="col-md-9">
                                <input id="supplier_ID" name="supplier_ID" type="text" placeholder="supplier_id" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="supplier_SKU" name="supplier_SKU" type="text" placeholder="supplier_sku" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="qty_available" name="qty_available" type="text" placeholder="qty_available" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="isActive" name="isActive" type="text" placeholder="isActive" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="date_added" name="date_added" type="text" placeholder="date_added" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label">Image</label>
                            <div class="col-md-9">
                                <input id="picture" name="picture" type="file" class="form-control here">
                            </div>
                        </div>
                        
                        <div class="form-group row">                            
                        <div class="col-md-9 offset-md-3">
                                <input id="cost" name="cost" placeholder="Cost" type="text" class="form-control here" required="required">
                            </div>
                        
                        <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
HTML;
        $this->template = $temp;

    }

}


?>

