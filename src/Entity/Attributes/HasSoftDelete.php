<?php
declare(strict_types=1);


namespace App\Entity\Attributes;

use Doctrine\ORM\Mapping as ORM;

trait HasSoftDelete
{
    /**
     * @ORM\Column(type="boolean")
     */
    private bool $geloescht;

    public function getGeloescht(): bool
    {
        return $this->geloescht;
    }

    public function setGeloescht(bool $geloescht): self
    {
        $this->geloescht = $geloescht;

        return $this;
    }
}