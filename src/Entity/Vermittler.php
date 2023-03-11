<?php
declare(strict_types=1);

namespace App\Entity;

use App\Entity\Attributes\HasSoftDelete;
use App\Entity\Attributes\SoftDeletable;
use App\Repository\VermittlerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VermittlerRepository::class)
 * @ORM\Table(name="std.tbl_kunden")
 */
class Vermittler implements SoftDeletable
{
    use HasSoftDelete;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private string $nummer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $vorname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $nachname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $firma;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNummer(): string
    {
        return $this->nummer;
    }

    public function setNummer(string $nummer): self
    {
        $this->nummer = $nummer;

        return $this;
    }

    public function getVorname(): string
    {
        return $this->vorname;
    }

    public function setVorname(string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getNachname(): string
    {
        return $this->nachname;
    }

    public function setNachname(string $nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(?string $firma): self
    {
        $this->firma = $firma;

        return $this;
    }
}
