<?php
require_once (FS_TEMPLATES . 'templateEngine.php');


class productShowTemplate extends templateEngine
{

    public function __construct()
    {


        $temp = <<<HTML
        <!-- Container -->
                    <div class="card-body">
                        <h3><img src = "/assets/image/{{picture}}" width="350" height="350"></h3>
                        <h4 class="card-title">
                            <a href="descriptionPage.php?id={{id}}">{{name}}</a>
                        </h4>
                        <h5>$ {{price}}</h5>
                        <p class="card-text">{{description}}</p>
                                <button name="submit" type="submit" class="btn btn-primary">Place in Cart</button>
                        <div class="card h-100">
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
                    </div>
HTML;
        $this->template = $temp;

    }
}