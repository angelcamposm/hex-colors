<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Stone: string implements TailwindColor
{
    use ColorTrait;

    case STONE_50 = '#fafaf9';
    case STONE_100 = '#f5f5f4';
    case STONE_200 = '#e7e5e4';
    case STONE_300 = '#d6d3d1';
    case STONE_400 = '#a8a29e';
    case STONE_500 = '#78716c';
    case STONE_600 = '#57534e';
    case STONE_700 = '#44403c';
    case STONE_800 = '#292524';
    case STONE_900 = '#1c1917';
    case STONE_950 = '#0c0a09';
}
