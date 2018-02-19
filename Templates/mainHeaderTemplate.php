<?php

require_once (FS_TEMPLATES . 'templateEngine.php');


class mainHeaderTemplate extends templateEngine
{

    /**
     * This is the html code that makes up the template.  This will
     * be unique to and set in eacb instance of the class
     *
     * @var null
     */

    public function __construct()
    {
        $temp = <<<HTML
        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - FlyPoleVault</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="Index.php">FlyPoleVault</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <li class="="nav-item">
                <a class="nav-link" href="createProduct.php">Post Products</a>
                </li>
                <li class="="nav-item">
                <a class="nav-link" href="createSupplier.php">Create Supplier</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">FlyPoleVault Features</h1>
            <div class="list-group">
                <a href="#" class="list-group-item">Poles</a>
                <a href="#" class="list-group-item">Jump Mats</a>
                <a href="#" class="list-group-item">Training Material</a>
            </div>

        </div>

<div class="col-lg-9">

        <div class ="jumbotron">
            <div class="jumbotron text-center">
                <h1>The FlyPoleVault Community</h1>
                <p>We hope to help everyone in our Community</p>
                <p>by giving out best prices for everyone to use.</p>
                <form class="form-inline">
                </form>
            </div>
        </div>
HTML;

        $this->template = $temp;

    }
}