<?php

namespace models;


class HttpUtils {

    public static function echoResponse($status_code, $response) {
        echo json_encode($response);
    }
}