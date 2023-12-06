<?php
$conn = mysqli_connect("localhost", "root", "", "kaa");
//$conn = mysqli_connect("localhost:3306","kaadb","8G3!76gfk","kaa_db");

define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/kaaproto/');
define('SITE_PATH', 'http://localhost/kaaproto/');

define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'uploaded/media/');
define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'uploaded/media/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH', SERVER_PATH . 'uploaded/media/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH', SITE_PATH . 'uploaded/media/');

define('BANNER_SERVER_PATH', SERVER_PATH . 'uploaded/banner/');
define('BANNER_SITE_PATH', SITE_PATH . 'uploaded/banner/');
define('IMAGE', SITE_PATH . 'uploaded/media/');
