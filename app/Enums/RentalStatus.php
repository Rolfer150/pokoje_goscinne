<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum RentalStatus: string implements HasLabel, HasColor
{
    case WAITING = 'oczekiwanie';
    case ACCEPTED = 'zaakceptowano';
    case ENDED = 'zakończono';
    case CANCELED = 'anulowano';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::WAITING => 'Oczekiwanie',
            self::ACCEPTED => 'Zaakceptowano',
            self::ENDED => 'Zakończono',
            self::CANCELED => 'Anulowano',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::WAITING => 'gray',
            self::ACCEPTED => 'success',
            self::ENDED => 'gray',
            self::CANCELED=> 'warning',
        };
    }
}
