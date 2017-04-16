<?php

require __DIR__ . '/../lib/HttpUtils.php';
include __DIR__ . '/../models/User.php';

$app->get('/[{name}]', function ($request, $response, $args) {

    $userClass = new User();
    $response = $userClass->getUsers();

    \models\HttpUtils::echoResponse(200,$response);
});
