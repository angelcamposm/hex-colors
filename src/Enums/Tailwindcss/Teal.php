<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Teal: string implements TailwindColor
{
    use ColorTrait;

    case TEAL_50 = '#f0fdfa';
    case TEAL_100 = '#ccfbf1';
    case TEAL_200 = '#99f6e4';
    case TEAL_300 = '#5eead4';
    case TEAL_400 = '#2dd4bf';
    case TEAL_500 = '#14b8a6';
    case TEAL_600 = '#0d9488';
    case TEAL_700 = '#0f766e';
    case TEAL_800 = '#115e59';
    case TEAL_900 = '#134e4a';
    case TEAL_950 = '#042f2e';
}
