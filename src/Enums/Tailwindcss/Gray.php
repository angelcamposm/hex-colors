<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Gray: string implements TailwindColor
{
    use ColorTrait;

    case GRAY_50 = '#f9fafb';
    case GRAY_100 = '#f3f4f6';
    case GRAY_200 = '#e5e7eb';
    case GRAY_300 = '#d1d5db';
    case GRAY_400 = '#9ca3af';
    case GRAY_500 = '#6b7280';
    case GRAY_600 = '#4b5563';
    case GRAY_700 = '#374151';
    case GRAY_800 = '#1f2937';
    case GRAY_900 = '#111827';
    case GRAY_950 = '#030712';
}
