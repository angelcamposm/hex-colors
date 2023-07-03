<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Yellow: string implements TailwindColor
{
    use ColorTrait;

    case YELLOW_50 = '#fefce8';
    case YELLOW_100 = '#fef9c3';
    case YELLOW_200 = '#fef08a';
    case YELLOW_300 = '#fde047';
    case YELLOW_400 = '#facc15';
    case YELLOW_500 = '#eab308';
    case YELLOW_600 = '#ca8a04';
    case YELLOW_700 = '#a16207';
    case YELLOW_800 = '#854d0e';
    case YELLOW_900 = '#713f12';
    case YELLOW_950 = '#422006';
}
