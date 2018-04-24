<?php
// initializ shopping cart class
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Include the HTML layout class
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

require_once (FS_INCLUDES . 'cart.php');
$cart = new Cart;

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM customers WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();

$header = new mainHeaderTemplate();
echo $header->renderStatic();
?>
<body>
<div class="container">
    <h1>Order Preview</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                ?>
                <tr>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo '$'.$item["price"].' USD'; ?></td>
                    <td><?php echo $item["qty"]; ?></td>
                    <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                </tr>
            <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
            <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
                <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <?php } ?>
        </tr>
        </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <p><?php echo $custRow['name']; ?></p>
        <p><?php echo $custRow['email']; ?></p>
        <p><?php echo $custRow['phone']; ?></p>
        <p><?php echo $custRow['address']; ?></p>
    </div>
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</body>
</html>
