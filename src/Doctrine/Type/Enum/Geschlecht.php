<?php
declare(strict_types=1);

namespace App\Doctrine\Type\Enum;

use App\Doctrine\Type\EnumType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

final class Geschlecht extends EnumType
{
    public string $enumType = \App\Entity\Type\Enum\Geschlecht::class;

    /**
     * @inheritDoc
     */
    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return 'geschlecht';
    }
}