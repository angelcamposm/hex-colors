<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Pink: string implements TailwindColor
{
    use ColorTrait;

    case PINK_50 = '#fdf2f8';
    case PINK_100 = '#fce7f3';
    case PINK_200 = '#fbcfe8';
    case PINK_300 = '#f9a8d4';
    case PINK_400 = '#f472b6';
    case PINK_500 = '#ec4899';
    case PINK_600 = '#db2777';
    case PINK_700 = '#be185d';
    case PINK_800 = '#9d174d';
    case PINK_900 = '#831843';
    case PINK_950 = '#500724';
}
