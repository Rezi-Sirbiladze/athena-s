<?php 
namespace App\Services;


class RecaptchaService
{

    function comprobar_rc($ip, $captcha){

        $secret = env('RECAPTCHA_SECRETKEY');

        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");

        return json_decode($response,true);;
    }
}