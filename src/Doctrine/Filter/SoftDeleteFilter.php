<?php
declare(strict_types=1);

namespace App\Doctrine\Filter;

use App\Entity\Attributes\SoftDeletable;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Query\Filter\SQLFilter;

final class SoftDeleteFilter extends SQLFilter
{
    /**
     * @inheritDoc
     */
    public function addFilterConstraint(ClassMetadata $targetEntity, $targetTableAlias): string
    {
        if (!$targetEntity->getReflectionClass()->implementsInterface(SoftDeletable::class)) {
            return '';
        }

        return sprintf(
            '%s.%s = 0',
            $targetTableAlias,
            SoftDeletable::COLUMN_GELOESCHT
        );
    }
}