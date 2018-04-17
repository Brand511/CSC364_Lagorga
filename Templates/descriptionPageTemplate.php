<?php
require_once (FS_TEMPLATES . 'templateEngine.php');


class descriptionPageTemplate extends templateEngine
{

    public function __construct()
    {


        $temp = <<<HTML
        
                <div class="card-body">
                        <h3><img src = "/assets/image/{{picture}}" width="400" height="400"></h3>
                        <h4 class="card-title">
                            <a href="descriptionPage.php">{{name}}</a>
                        </h4>
                        <h5>$ {{price}}</h5>
                        <h5>{{sku}}</h5>
                        <p class="card-text">{{description}}</p>
                        <div class="card h-100">
                </div>
                    </div>
                <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                <button name="submit" type="submit" value="AddToCart" class="btn btn-primary">Place in Cart</button>
                            </div>
                        </div>
HTML;
        $this->template = $temp;

    }
}