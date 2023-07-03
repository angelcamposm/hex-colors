<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Fuchsia: string implements TailwindColor
{
    use ColorTrait;

    case FUCHSIA_50 = '#fdf4ff';
    case FUCHSIA_100 = '#fae8ff';
    case FUCHSIA_200 = '#f5d0fe';
    case FUCHSIA_300 = '#f0abfc';
    case FUCHSIA_400 = '#e879f9';
    case FUCHSIA_500 = '#d946ef';
    case FUCHSIA_600 = '#c026d3';
    case FUCHSIA_700 = '#a21caf';
    case FUCHSIA_800 = '#86198f';
    case FUCHSIA_900 = '#701a75';
    case FUCHSIA_950 = '#4a044e';
}
