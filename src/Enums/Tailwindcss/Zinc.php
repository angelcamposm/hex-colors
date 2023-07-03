<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Zinc: string implements TailwindColor
{
    use ColorTrait;

    case ZINC_50 = '#fafafa';
    case ZINC_100 = '#f4f4f5';
    case ZINC_200 = '#e4e4e7';
    case ZINC_300 = '#d4d4d8';
    case ZINC_400 = '#a1a1aa';
    case ZINC_500 = '#71717a';
    case ZINC_600 = '#52525b';
    case ZINC_700 = '#3f3f46';
    case ZINC_800 = '#27272a';
    case ZINC_900 = '#18181b';
    case ZINC_950 = '#09090b';
}
