<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum RentalStatus: string implements HasLabel, HasColor
{
    case ACTIVE = 'aktywna';
    case ENDED = 'zakończono';
    case REJECTED = 'odrzucono';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ACTIVE => 'Aktywna',
            self::ENDED => 'Zakończono',
            self::REJECTED => 'Odrzucono',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::ACTIVE => 'success',
            self::ENDED => 'gray',
            self::REJECTED=> 'danger',
        };
    }
}
