<?php
declare(strict_types=1);

namespace App\Entity\Type\Enum;

use App\Entity\Type\Enum;

final class Geschlecht extends Enum
{
    public const VALUES = [
        'männlich',
        'weiblich',
        'divers'
    ];
}