<?php

namespace Acamposm\HexColors\Traits;

trait ColorTrait
{
    public function color(): string
    {
        return $this->value;
    }
}
