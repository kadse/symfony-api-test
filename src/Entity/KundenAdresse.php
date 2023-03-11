<?php

namespace App\Entity;

use App\Repository\KundenAdresseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KundenAdresseRepository::class)
 */
class KundenAdresse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $kunde_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $adresse_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $geschaeftlich;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rechnungsadresse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $geloescht;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKundeId(): ?string
    {
        return $this->kunde_id;
    }

    public function setKundeId(string $kunde_id): self
    {
        $this->kunde_id = $kunde_id;

        return $this;
    }

    public function getAdresseId(): ?int
    {
        return $this->adresse_id;
    }

    public function setAdresseId(int $adresse_id): self
    {
        $this->adresse_id = $adresse_id;

        return $this;
    }

    public function getGeschaeftlich(): ?bool
    {
        return $this->geschaeftlich;
    }

    public function setGeschaeftlich(bool $geschaeftlich): self
    {
        $this->geschaeftlich = $geschaeftlich;

        return $this;
    }

    public function getRechnungsadresse(): ?bool
    {
        return $this->rechnungsadresse;
    }

    public function setRechnungsadresse(?bool $rechnungsadresse): self
    {
        $this->rechnungsadresse = $rechnungsadresse;

        return $this;
    }

    public function getGeloescht(): ?bool
    {
        return $this->geloescht;
    }

    public function setGeloescht(bool $geloescht): self
    {
        $this->geloescht = $geloescht;

        return $this;
    }
}
