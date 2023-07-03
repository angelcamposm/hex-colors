<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Blue: string implements TailwindColor
{
    use ColorTrait;

    case BLUE_50 = '#eff6ff';
    case BLUE_100 = '#dbeafe';
    case BLUE_200 = '#bfdbfe';
    case BLUE_300 = '#93c5fd';
    case BLUE_400 = '#60a5fa';
    case BLUE_500 = '#3b82f6';
    case BLUE_600 = '#2563eb';
    case BLUE_700 = '#1d4ed8';
    case BLUE_800 = '#1e40af';
    case BLUE_900 = '#1e3a8a';
    case BLUE_950 = '#172554';
}
