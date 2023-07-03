<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Emerald: string implements TailwindColor
{
    use ColorTrait;

    case EMERALD_50 = '#ecfdf5';
    case EMERALD_100 = '#d1fae5';
    case EMERALD_200 = '#a7f3d0';
    case EMERALD_300 = '#6ee7b7';
    case EMERALD_400 = '#34d399';
    case EMERALD_500 = '#10b981';
    case EMERALD_600 = '#059669';
    case EMERALD_700 = '#047857';
    case EMERALD_800 = '#065f46';
    case EMERALD_900 = '#064e3b';
    case EMERALD_950 = '#022c22';
}
