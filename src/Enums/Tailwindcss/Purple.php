<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Purple: string implements TailwindColor
{
    use ColorTrait;

    case PURPLE_50 = '#faf5ff';
    case PURPLE_100 = '#f3e8ff';
    case PURPLE_200 = '#e9d5ff';
    case PURPLE_300 = '#d8b4fe';
    case PURPLE_400 = '#c084fc';
    case PURPLE_500 = '#a855f7';
    case PURPLE_600 = '#9333ea';
    case PURPLE_700 = '#7e22ce';
    case PURPLE_800 = '#6b21a8';
    case PURPLE_900 = '#581c87';
    case PURPLE_950 = '#3b0764';
}
