<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Orange: string implements TailwindColor
{
    use ColorTrait;

    case ORANGE_50 = '#fff7ed';
    case ORANGE_100 = '#ffedd5';
    case ORANGE_200 = '#fed7aa';
    case ORANGE_300 = '#fdba74';
    case ORANGE_400 = '#fb923c';
    case ORANGE_500 = '#f97316';
    case ORANGE_600 = '#ea580c';
    case ORANGE_700 = '#c2410c';
    case ORANGE_800 = '#9a3412';
    case ORANGE_900 = '#7c2d12';
    case ORANGE_950 = '#431407';
}
