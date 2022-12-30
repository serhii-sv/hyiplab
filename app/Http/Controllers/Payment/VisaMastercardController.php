<?php
/*
 * Copyright. Created by Serhii Voronovych
 * https://voronovych.com
 */

namespace App\Http\Controllers\Payment;

/**
 * Class VisaMastercardController
 * @package App\Http\Controllers\Payment
 */
class VisaMastercardController extends FreeKassaController
{
    /** @var string $psCode */
    protected $psCode = 'visa_mastercard';
}
