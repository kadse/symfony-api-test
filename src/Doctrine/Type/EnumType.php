<?php
declare(strict_types=1);


namespace App\Doctrine\Type;

use App\Entity\Type\Enum;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

abstract class EnumType extends Type
{
    public const TYPE = 'enum';

    /** @var class-string&Enum */
    public string $enumType;

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return self::TYPE;
    }

    /**
     * @param $value
     * @param AbstractPlatform $platform
     *
     * @return Enum
     */
    public function convertToPHPValue($value, AbstractPlatform $platform): Enum
    {
        return new $this->enumType($value);
    }
}