<?php
declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={
 *         "get"={"path"="/adressen"},
 *         "post"={"path"="/adressen"}
 *     },
 *     itemOperations={
 *         "get"={
 *             "path"="/adressen/{id}",
 *             "requirements"={"id"="\d+"},
 *         },
 *         "put"={
 *             "path"="/adressen/{id}",
 *             "requirements"={"id"="\d+"},
 *         },
 *         "delete"={
 *             "path"="/adressen/{id}",
 *             "requirements"={"id"="\d+"},
 *         }
 *     }
 * )
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 * @ORM\Table(name="std.adresse")
 */
class Adresse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $adresse_id;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private string $strasse;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private ?string $plz;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private string $ort;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Bundesland")
     * @ORM\JoinColumn(name="bundesland", referencedColumnName="kuerzel")
     * @Assert\NotBlank()
     */
    private Bundesland $bundesland;

    public function getId(): int
    {
        return $this->adresse_id;
    }

    public function getStrasse(): string
    {
        return $this->strasse;
    }

    public function setStrasse(string $strasse): self
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): self
    {
        $this->plz = $plz;

        return $this;
    }

    public function getOrt(): string
    {
        return $this->ort;
    }

    public function setOrt(string $ort): self
    {
        $this->ort = $ort;

        return $this;
    }

    public function getBundesland(): Bundesland
    {
        return $this->bundesland;
    }

    public function setBundesland(Bundesland $bundesland): self
    {
        $this->bundesland = $bundesland;

        return $this;
    }
}
