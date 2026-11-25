<?php

namespace App\Enum\Traits;

trait HasValue
{
    /**
     * @return string[]
     */
    public function value(): array
    {
        return array_column(self::cases(), 'value');
    }
}
