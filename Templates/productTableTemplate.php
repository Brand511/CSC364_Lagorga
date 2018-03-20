<?php
require_once (FS_TEMPLATES . 'templateEngine.php');


class productTableTemplate extends templateEngine
{

    public function __construct()
    {


        $temp = <<<HTML
        <!-- Container -->
<table>
  <thead>
    <tr>
      <th>Number</th>
      <th>Product</th>
      <th>Price</th>
      <th>sku</th>
      <th>update</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><$id</td>
      <td>$name</td>
      <td>$sku</td>
      <td>$Price</td>
      <td><a class="editButton" href="/updateProduct.php?">Update</a></td>
      <td><a class="deleteButton" href="/deleteProduct.php?">Delete</a></td>   
    </tr>
  </tbody>
</table>
HTML;
        $this->template = $temp;

    }
}