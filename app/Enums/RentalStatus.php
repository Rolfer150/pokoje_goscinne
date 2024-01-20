<?php

namespace App\Enums;

enum RentalStatus: string
{
    case WAITING = 'oczekiwanie';
    case ACCEPTED = 'zaakceptowano';
    case ENDED = 'zakończono';
    case ANNULlED = 'anulowano';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
