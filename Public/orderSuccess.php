<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <style>
        .container{width: 100%;padding: 50px;}
        p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
</div>
</body>
    </html><?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 4/24/2018
 * Time: 6:41 PM
 */