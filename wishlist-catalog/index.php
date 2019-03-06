<?php
$p = $_SERVER['REQUEST_URI'];

$result = [];

switch ($p) {
    case '/':
        echo "Welcome to the Wishlist Catalog API. Valid endpoints are /products, /products/{productID}, /version, /status";
        break;
    case '/status':
        $result['status'] = "ok";
        echo json_encode($result);
        break;
    case '/version':
        $result['version'] = "1";
        echo json_encode($result);
        break;
    default:
        $result['url'] = preg_replace("/^\//", '', $p);
        $result['status'] = "ok";
        echo json_encode($result);
        break;
}
?>
