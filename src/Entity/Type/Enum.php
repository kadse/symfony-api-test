<?php
declare(strict_types=1);

namespace App\Entity\Type;

use LogicException;

/**
 * TODO PHP 8 sind Enums nativ
 */
abstract class Enum
{
    public const VALUES = [];

    private string $value;

    public function __construct(string $value)
    {
        if (!in_array($value, static::VALUES, true)) {
            throw new LogicException('Enum-Value "' . $value . '" nicht erlaubt.');
        }
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }

    public function getValue(): string
    {
        return $this->value;
    }
}