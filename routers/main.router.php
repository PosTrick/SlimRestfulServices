<?php

require __DIR__ . '/../lib/HttpUtils.php';
include __DIR__ . '/../models/User.php';

$app->get('/methodget', function ($request, $response, $args) {

    $userClass = new User();
    $response = $userClass->getUsers();

    \models\HttpUtils::echoResponse(200,$response);
});

$app->post('/methodpost', function($request, $response) {
    $data = $request->getParsedBody();
    print_r($data['email']);
});

$app->put('/methodput/{id}', function($request, $response) {
    $id = $request->getAttribute('id');
    $data = $request->getParsedBody();
    print_r("Put: ". $data['email'] . ' - ' . $id);
});

$app->delete('/methoddelete/{id}', function($request, $response) {
    $id = $request->getAttribute('id');
    print_r("Delete: " . $id);
});
