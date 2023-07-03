<?php

namespace Acamposm\HexColors\Enums\Tailwindcss;

use Acamposm\HexColors\Interfaces\TailwindColor;
use Acamposm\HexColors\Traits\ColorTrait;

enum Slate: string implements TailwindColor
{
    use ColorTrait;

    case SLATE_50 = '#f8fafc';
    case SLATE_100 = '#f1f5f9';
    case SLATE_200 = '#e2e8f0';
    case SLATE_300 = '#cbd5e1';
    case SLATE_400 = '#94a3b8';
    case SLATE_500 = '#64748b';
    case SLATE_600 = '#475569';
    case SLATE_700 = '#334155';
    case SLATE_800 = '#1e293b';
    case SLATE_900 = '#0f172a';
    case SLATE_950 = '#020617';
}
