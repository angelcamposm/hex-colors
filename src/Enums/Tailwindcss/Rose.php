<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Rose: string implements TailwindColor
{
    use ColorTrait;

    case ROSE_50 = '#fff1f2';
    case ROSE_100 = '#ffe4e6';
    case ROSE_200 = '#fecdd3';
    case ROSE_300 = '#fda4af';
    case ROSE_400 = '#fb7185';
    case ROSE_500 = '#f43f5e';
    case ROSE_600 = '#e11d48';
    case ROSE_700 = '#be123c';
    case ROSE_800 = '#9f1239';
    case ROSE_900 = '#881337';
    case ROSE_950 = '#4c0519';
}
