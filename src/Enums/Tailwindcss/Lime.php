<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Lime: string implements TailwindColor
{
    use ColorTrait;

    case LIME_50 = '#f7fee7';
    case LIME_100 = '#ecfccb';
    case LIME_200 = '#d9f99d';
    case LIME_300 = '#bef264';
    case LIME_400 = '#a3e635';
    case LIME_500 = '#84cc16';
    case LIME_600 = '#65a30d';
    case LIME_700 = '#4d7c0f';
    case LIME_800 = '#3f6212';
    case LIME_900 = '#365314';
    case LIME_950 = '#1a2e05';
}
