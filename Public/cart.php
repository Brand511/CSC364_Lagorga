<?php
// Load all application files and configurations
require($_SERVER[ 'DOCUMENT_ROOT' ] . '/../includes/application_includes.php');
// Include the HTML layout class
require_once(FS_TEMPLATES . 'mainHeaderTemplate.php');
require_once(FS_TEMPLATES . 'cartTemplate.php');
require_once(FS_TEMPLATES . 'mainFooterTemplate.php');

require_once (FS_INCLUDES . 'cart.php');


$header = new mainHeaderTemplate();
echo $header->renderStatic();