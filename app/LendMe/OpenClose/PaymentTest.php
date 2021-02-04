<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Lendme;

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}

class CashPaymentMethod implements PaymentMethodInterface 
{
    public function acceptPayment($receipt)
    {
        // to do what you want
    }
}


class checkout 
{
    public function begin(Receipt $receipt, PaymentMethodInterface $payment) 
    {
        return $payment->acceptPayment($receipt);
        
    }
}
