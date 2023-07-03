<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Neutral: string implements TailwindColor
{
    use ColorTrait;

    case NEUTRAL_50 = '#fafafa';
    case NEUTRAL_100 = '#f5f5f5';
    case NEUTRAL_200 = '#e5e5e5';
    case NEUTRAL_300 = '#d4d4d4';
    case NEUTRAL_400 = '#a3a3a3';
    case NEUTRAL_500 = '#737373';
    case NEUTRAL_600 = '#525252';
    case NEUTRAL_700 = '#404040';
    case NEUTRAL_800 = '#262626';
    case NEUTRAL_900 = '#171717';
    case NEUTRAL_950 = '#0a0a0a';
}
