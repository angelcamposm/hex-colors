<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Indigo: string implements TailwindColor
{
    use ColorTrait;

    case INDIGO_50 = '#eef2ff';
    case INDIGO_100 = '#e0e7ff';
    case INDIGO_200 = '#c7d2fe';
    case INDIGO_300 = '#a5b4fc';
    case INDIGO_400 = '#818cf8';
    case INDIGO_500 = '#6366f1';
    case INDIGO_600 = '#4f46e5';
    case INDIGO_700 = '#4338ca';
    case INDIGO_800 = '#3730a3';
    case INDIGO_900 = '#312e81';
    case INDIGO_950 = '#1e1b4b';
}
