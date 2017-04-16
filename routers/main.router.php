<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $name = $request->getAttribute('name');
    echo "Hello $name";
});
