<?php

require_once (FS_TEMPLATES . 'templateEngine.php');

class updateProductTemplate extends templateEngine {


    public function __construct($products){

        $temp = <<<HTML
            <div class="container" >
                <div class="row justify-content-center">
                    <h2>Update this product</h2>
                </div>
                <div class="row justify-content-center">
                    <form class="col-md-8" action="/updateProduct.php" method="POST" >
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
                                <input id="date_added" name="date_added" type="text" placeholder="date_added" class="form-control here">
                            </div>
                        </div>
                        
                        <div class="form-group row">                            
                            <div class="col-md-4 offset-md-3">
                                <input id="cost" name="Cost" type="text" placeholder="Cost" class="form-control here">
                            </div>                           
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

        // Token substitution
        $temp = str_replace('{{id}}', $products['id'], $temp);
        $temp = str_replace('{{name}}', $products['name'], $temp);
        $temp = str_replace('{{sku}}', $products['sku'], $temp);
        $temp = str_replace('{{price}}', $products['price'], $temp);
        $temp = str_replace('{{supplier_id}}', $products['supplier_id'], $temp);
        $temp = str_replace('{{supplier_sku}}', $products['supplier_sku'], $temp);
        $temp = str_replace('{{qty_available}}', $products['qty_available'], $temp);
        $temp = str_replace('{{date_added}}', $products['date_added'], $temp);
        $temp = str_replace('{{cost}}', $products['cost'], $temp);

        $this->template = $temp;

    }

}


?>
