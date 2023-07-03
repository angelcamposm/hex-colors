<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Amber: string implements TailwindColor
{
    use ColorTrait;

    case AMBER_50 = '#fffbeb';
    case AMBER_100 = '#fef3c7';
    case AMBER_200 = '#fde68a';
    case AMBER_300 = '#fcd34d';
    case AMBER_400 = '#fbbf24';
    case AMBER_500 = '#f59e0b';
    case AMBER_600 = '#d97706';
    case AMBER_700 = '#b45309';
    case AMBER_800 = '#92400e';
    case AMBER_900 = '#78350f';
    case AMBER_950 = '#451a03';
}
