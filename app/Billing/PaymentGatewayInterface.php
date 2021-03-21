<?php

namespace App\Billing;

interface PaymentGatewayInterface
{
    public function setDiscount($amount);

    public function charge($amount);
}
