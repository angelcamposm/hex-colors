<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Violet: string implements TailwindColor
{
    use ColorTrait;

    case VIOLET_50 = '#f5f3ff';
    case VIOLET_100 = '#ede9fe';
    case VIOLET_200 = '#ddd6fe';
    case VIOLET_300 = '#c4b5fd';
    case VIOLET_400 = '#a78bfa';
    case VIOLET_500 = '#8b5cf6';
    case VIOLET_600 = '#7c3aed';
    case VIOLET_700 = '#6d28d9';
    case VIOLET_800 = '#5b21b6';
    case VIOLET_900 = '#4c1d95';
    case VIOLET_950 = '#2e1065';
}
