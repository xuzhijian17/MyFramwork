<?php
// load and initialize any global libraries
require_once 'controllers/frontController.php';

frontController::getInstance()->run();

// route the request internally
/*$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/framwork-demo/' == $uri) {
    list_action();
} elseif ('/framwork-demo/show' == $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}
var_dump($uri);*/