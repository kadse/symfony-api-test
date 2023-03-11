<?php
declare(strict_types=1);


namespace App\Entity\Attributes;

interface SoftDeletable
{
    public const COLUMN_GELOESCHT = 'geloescht';

    public function getGeloescht(): bool;

    public function setGeloescht(bool $geloescht): self;
}