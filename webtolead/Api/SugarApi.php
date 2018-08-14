<?php

class SugarApi
{
    protected $instance_url;
    protected $username;
    protected $password;
    protected $client_id;
    protected $client_secret;

    function __construct(){
        $this->instance_url  = get_option('sugar_url');
        $this->username      = get_option('sugar_username');
        $this->password      = get_option('sugar_password');
        $this->client_id     = get_option('sugar_client_id');
        $this->client_secret = get_option('sugar_client_secret');
    }

    function auth(){

    }

    function call(){


        //Login - POST /oauth2/token
        $auth_url = $this->instance_url . "/oauth2/token";

        $oauth2_token_arguments = array(
            "grant_type" => "password",
            //client id - default is sugar.
            //It is recommended to create your own in Admin > OAuth Keys
            "client_id" => "sugar",
            "client_secret" => "",
            "username" => $this->username,
            "password" => $this->password,
            //platform type - default is base.
            //It is recommend to change the platform to a custom name such as "custom_api" to avoid authentication conflicts.
            "platform" => "custom_api"
        );

        $auth_request = curl_init($auth_url);
        curl_setopt($auth_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
        curl_setopt($auth_request, CURLOPT_HEADER, false);
        curl_setopt($auth_request, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($auth_request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($auth_request, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($auth_request, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json"
        ));

        //convert arguments to json
        $json_arguments = json_encode($oauth2_token_arguments);
        curl_setopt($auth_request, CURLOPT_POSTFIELDS, $json_arguments);

        //execute request
        $oauth2_token_response = curl_exec($auth_request);

        //decode oauth2 response to get token
        $oauth2_token_response_obj = json_decode($oauth2_token_response);
        $oauth_token = $oauth2_token_response_obj->access_token;
    }

}