<?php
$router = new Router;
$router->post('/login', function($request) {
    $body = $request->getBody();
});
?>