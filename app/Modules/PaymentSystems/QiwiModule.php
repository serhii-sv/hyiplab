<?php
/*
 * Copyright. Created by Serhii Voronovych
 * https://voronovych.com
 */

namespace App\Modules\PaymentSystems;

/**
 * Class QiwiModule
 * @package App\Modules\PaymentSystems
 */
class QiwiModule extends FreeKassaModule
{
    /** @var string $code */
    protected $code = 'qiwi';
}