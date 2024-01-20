<?php

namespace App\Enums;

enum PaymentType: string
{
    case CREDIT_CARD = 'karta płatnicza';
    case ON_PLACE = 'na miejscu';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
