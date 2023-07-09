<?php

namespace Acamposm\HexColors\Enums\Bootstrap;

use Acamposm\HexColors\Interfaces\ColorInterface;
use Acamposm\HexColors\Traits\ColorTrait;

enum BootstrapColor: string implements ColorInterface
{
    use ColorTrait;

    case Primary = '#007bff';
    case Secondary = '#6c757d';
    case Success = '#28a745';
    case Danger = '#dc3545';
    case Warning = '#ffc107';
    case Info = '#17a2b8';
    case Light = '#f8f9fa';
    case Dark = '#343a40';
    case White = '#fff';
}
