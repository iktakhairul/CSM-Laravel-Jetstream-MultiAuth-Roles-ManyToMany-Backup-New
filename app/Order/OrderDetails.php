<?php


namespace App\Order;


use App\Billing\PaymentGatewayInterface;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(20000);

        return [
            'name' => 'Honda',
            'Model' => 'CBR 250R'
        ];
    }
}
