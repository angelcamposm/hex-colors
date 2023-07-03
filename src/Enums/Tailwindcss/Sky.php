<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Sky: string implements TailwindColor
{
    use ColorTrait;

    case SKY_50 = '#f0f9ff';
    case SKY_100 = '#e0f2fe';
    case SKY_200 = '#bae6fd';
    case SKY_300 = '#7dd3fc';
    case SKY_400 = '#38bdf8';
    case SKY_500 = '#0ea5e9';
    case SKY_600 = '#0284c7';
    case SKY_700 = '#0369a1';
    case SKY_800 = '#075985';
    case SKY_900 = '#0c4a6e';
    case SKY_950 = '#082f49';
}
