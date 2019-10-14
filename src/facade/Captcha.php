<?php

namespace sower\captcha\facade;

use sower\Facade;

class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \sower\captcha\Captcha::class;
    }
}
