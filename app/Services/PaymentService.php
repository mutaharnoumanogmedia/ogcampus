<?php

namespace App\Services;

class PaymentService
{
    public function charge(string $customerId, float $amount): bool
    {
        // Simulate payment gateway call
        return true;
    }
}
