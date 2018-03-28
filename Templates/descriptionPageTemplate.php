<?php
require_once (FS_TEMPLATES . 'templateEngine.php');


class descriptionPageTemplate extends templateEngine
{

    public function __construct()
    {


        $temp = <<<HTML
        
                <h2>{{name}}</h2>
                <p>{{description}}</p >
                <h3>"$"{{price}}</h3>
                <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                <button name="submit" type="submit" class="btn btn-primary">Place in Cart</button>
                            </div>
                        </div>
HTML;
        $this->template = $temp;

    }
}