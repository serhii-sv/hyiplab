<?php
/*
 * Copyright. Created by Serhii Voronovych
 * https://voronovych.com
 */

namespace App\Http\Controllers\Payment;

/**
 * Class YandexController
 * @package App\Http\Controllers\Payment
 */
class YandexController extends FreeKassaController
{
    /** @var string $psCode */
    protected $psCode = 'yandex';
}
