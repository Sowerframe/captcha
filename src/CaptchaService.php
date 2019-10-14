<?php

namespace sower\captcha;

use sower\Route;
use sower\Service;
use sower\Validate;

class CaptchaService extends Service
{
    public function boot(Route $routes)
    {
        $routes->get('captcha/[:config]', "\\sower\\captcha\\CaptchaController@index");

        Validate::maker(function ($validate) {
            $validate->extend('captcha', function ($value) {
                return captcha_check($value);
            }, ':attribute错误!');
        });
    }
}
