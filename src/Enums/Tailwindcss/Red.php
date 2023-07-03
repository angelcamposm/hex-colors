<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Red: string implements TailwindColor
{
    use ColorTrait;

    case RED_50 = '#fef2f2';
    case RED_100 = '#fee2e2';
    case RED_200 = '#fecaca';
    case RED_300 = '#fca5a5';
    case RED_400 = '#f87171';
    case RED_500 = '#ef4444';
    case RED_600 = '#dc2626';
    case RED_700 = '#b91c1c';
    case RED_800 = '#991b1b';
    case RED_900 = '#7f1d1d';
    case RED_950 = '#450a0a';
}
