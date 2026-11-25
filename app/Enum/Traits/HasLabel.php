<?php


namespace App\Enum\Traits;


trait HasLabel{


    public function label(): string {
        return $this->value;
    }
}