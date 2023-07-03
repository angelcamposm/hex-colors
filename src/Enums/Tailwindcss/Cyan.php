<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Cyan: string implements TailwindColor
{
    use ColorTrait;

    case CYAN_50 = '#ecfeff';
    case CYAN_100 = '#cffafe';
    case CYAN_200 = '#a5f3fc';
    case CYAN_300 = '#67e8f9';
    case CYAN_400 = '#22d3ee';
    case CYAN_500 = '#06b6d4';
    case CYAN_600 = '#0891b2';
    case CYAN_700 = '#0e7490';
    case CYAN_800 = '#155e75';
    case CYAN_900 = '#164e63';
    case CYAN_950 = '#083344';
}
