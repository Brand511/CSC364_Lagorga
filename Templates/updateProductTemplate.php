<?php

require_once (FS_TEMPLATES . 'templateEngine.php');

class updateProductTemplate extends templateEngine {

    protected $whiteList = ['id',
        'name', 'sku', 'price',
        'supplier_id', 'supplier_sku', 'cost', 'picture', 'qty_available',
        'date_added', 'isActive'];

    public function __construct($u){

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
                                <input id="name" name="name" placeholder="Name" type="text" class="form-control here" value="{{name}}" required="required">                                    
                            </div>
                            <div class="col-md-3 w-80">
                                <input id="price" name="price" placeholder="Price" type="text" class="form-control here"value="{{price}}" required="required">
                            </div>
                            <div class="col-md-3 w-80">
                                <input id="sku" name="sku" placeholder="Sku" type="text" class="form-control here" value="{{sku}}" required="required">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-3 col-form-label" for="description">Description</label>
                            <div class="col-md-14 w-100">
                                <textarea class="form-control" id="description" name="description" value="{{description}}"> </textarea>
                            </div>
                        </div>
                                                
                        <div class="form-group row">
                            <label for="address1" class="col-md-3 col-form-label">Supplier</label>
                            <div class="col-md-9">
                                <input id="supplier_id" name="supplier_id" type="text" placeholder="supplier_id" value="{{supplier_ID}}" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="supplier_sku" name="supplier_sku" type="text" placeholder="supplier_SKU" value="{{supplier_SKU}}"class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="qty_available" name="qty_available" type="text" placeholder="qty_available" value="{{qty_available}}"class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-md-9 offset-md-3">
                                <input id="date_added" name="date_added" type="text" placeholder="0000/00/00" value="{{date_added}}" class="form-control here">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label">Image</label>
                            <div class="col-md-9">
                                <input id="picture" name="picture" type="file" value="/assets/image/{{picture}}" class="form-control here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="id">Id</label>
                            <div class="col-md-3 w-80">                                
                                <input id="id" name="id" placeholder="id" type="text" class="form-control here" value="{{id}}" required="required">                                    
                            </div>
                         </div>
                        
                        <div class="form-group row">                            
                            <div class="col-md-4 offset-md-3">
                                <input id="cost" name="cost" type="text" placeholder="Cost" value="{{cost}}" class="form-control here">
                            </div>                           
                        </div>
                        
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="description">Delete from view</label>
                            <div class="col-md-9 offset-md-3">
                                <input id="isActive" name="isActive" type="checkbox" value="{{isActive}}" class="form-control here">
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
        $temp = str_replace('{{name}}', $u['name'], $temp);
        $temp = str_replace('{{sku}}', $u['sku'], $temp);
        $temp = str_replace('{{cost}}', $u['cost'], $temp);
        $temp = str_replace('{{picture}}', $u['picture'], $temp);
        $temp = str_replace('{{date_added}}', $u['date_added'], $temp);
        $temp = str_replace('{{qty_available}}', $u['qty_available'], $temp);
        $temp = str_replace('{{supplier_ID}}', $u['supplier_ID'], $temp);
        $temp = str_replace('{{supplier_SKU}}', $u['supplier_SKU'], $temp);
        $temp = str_replace('{{price}}', $u['price'], $temp);
        $temp = str_replace('{{isActive}}', $u['isActive'], $temp);
        $temp = str_replace('{{id}}', $u['id'], $temp);
        $this->template = $temp;

    }

}


?>
