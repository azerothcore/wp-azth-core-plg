<?php

namespace ACore;

class SInfoApi {
    public static function serverInfo() {
        return SoapHandler::I()->executeCommand("server info");
    }
}

add_action( 'rest_api_init', function () {

   register_rest_route( 'wp-acore/v1', 'server-info',array(
       'methods'  => 'GET',
       'callback' => function() {
           return SInfoApi::serverInfo();
       }
   ) );
});

