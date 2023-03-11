<?php
declare(strict_types=1);

namespace App\Entity;

use App\Entity\Attributes\HasSoftDelete;
use App\Entity\Attributes\SoftDeletable;
use App\Repository\KundenAdresseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KundenAdresseRepository::class)
 * @ORM\Table(name="std.kunde_adresse")
 */
class KundenAdresse implements SoftDeletable
{
    use HasSoftDelete;

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=8)
     */
    private string $kunde_id;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private int $adresse_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $geschaeftlich;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $rechnungsadresse;

    public function getKundeId(): string
    {
        return $this->kunde_id;
    }

    public function setKundeId(string $kunde_id): self
    {
        $this->kunde_id = $kunde_id;

        return $this;
    }

    public function getAdresseId(): int
    {
        return $this->adresse_id;
    }

    public function setAdresseId(int $adresse_id): self
    {
        $this->adresse_id = $adresse_id;

        return $this;
    }

    public function getGeschaeftlich(): bool
    {
        return $this->geschaeftlich;
    }

    public function setGeschaeftlich(bool $geschaeftlich): self
    {
        $this->geschaeftlich = $geschaeftlich;

        return $this;
    }

    public function getRechnungsadresse(): bool
    {
        return $this->rechnungsadresse;
    }

    public function setRechnungsadresse(bool $rechnungsadresse): self
    {
        $this->rechnungsadresse = $rechnungsadresse;

        return $this;
    }
}
