<?php
require_once (FS_TEMPLATES . 'templateEngine.php');


class productTableTemplate extends templateEngine
{

    public function __construct()
    {


        $temp = <<<HTML
        <!-- Container -->
    <tr>
      <td>{{id}}</td>
      <td>{{name}}</td>
      <td>{{sku}}</td>
      <td>{{price}}</td>
      <td>{{picture}}</td>
      <td><a class="editButton" href="/updateProduct.php?id={{id}}">Update</a></td>
      <td><a class="deleteButton" href="/deleteProduct.php?id={{id}}">Delete</a></td>   
    </tr>
HTML;
        $this->template = $temp;

    }
}