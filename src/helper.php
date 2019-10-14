<?php
use sower\captcha\facade\Captcha;
use sowers\Route;
use sower\Response;

/**
 * @param string $config
 * @return \sower\Response
 */
function captcha($config = null): Response
{
    return Captcha::create($config);
}

/**
 * @param $config
 * @return string
 */
function captcha_src($config = null): string
{
    return Route::buildUrl('/captcha' . ($config ? "/{$config}" : ''));
}

/**
 * @param $id
 * @return string
 */
function captcha_img($id = ''): string
{
    $src = captcha_src($id);

    return "<img src='{$src}' alt='captcha' onclick='this.src=\"{$src}?s=\"+Math.random();' />";
}

/**
 * @param string $value
 * @return bool
 */
function captcha_check($value)
{
    return Captcha::check($value);
}
