<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayInterface;
use App\Order\OrderDetails;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayInterface $paymentGateway)
    {
        $order = $orderDetails->all();
        return $paymentGateway->charge(500000);
    }
}
