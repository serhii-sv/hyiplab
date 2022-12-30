<?php
/*
 * Copyright. Created by Serhii Voronovych
 * https://voronovych.com
 */

namespace App\Modules\PaymentSystems;

/**
 * Class VisaMastercardModule
 * @package App\Modules\PaymentSystems
 */
class VisaMastercardModule extends FreeKassaModule
{
    /** @var string $code */
    protected $code = 'visa_mastercard';
}