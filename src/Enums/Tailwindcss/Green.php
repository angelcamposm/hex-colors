<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Green: string implements TailwindColor
{
    use ColorTrait;

    case GREEN_50 = '#f0fdf4';
    case GREEN_100 = '#dcfce7';
    case GREEN_200 = '#bbf7d0';
    case GREEN_300 = '#86efac';
    case GREEN_400 = '#4ade80';
    case GREEN_500 = '#22c55e';
    case GREEN_600 = '#16a34a';
    case GREEN_700 = '#15803d';
    case GREEN_800 = '#166534';
    case GREEN_900 = '#14532d';
    case GREEN_950 = '#052e16';
}
