<?php
/*
 * Copyright. Created by Serhii Voronovych
 * https://voronovych.com
 */

namespace App\Http\Controllers\Payment;

/**
 * Class QiwiController
 * @package App\Http\Controllers\Payment
 */
class QiwiController extends FreeKassaController
{
    /** @var string $psCode */
    protected $psCode = 'qiwi';
}
