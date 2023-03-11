<?php
declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Attributes\HasSoftDelete;
use App\Entity\Attributes\SoftDeletable;
use App\Entity\Type\Enum\Geschlecht;
use App\Repository\KundeRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={
 *         "get"={"path"="/kunden"},
 *         "post"={"path"="/kunden"}
 *     },
 *     itemOperations={
 *         "get"={
 *             "path"="/kunden/{id}",
 *             "requirements"={"id"="[A-Z\d*]{8}"},
 *         },
 *         "put"={
 *             "path"="/kunden/{id}",
 *             "requirements"={"id"="[A-Z\d*]{8}"},
 *         },
 *         "delete"={
 *             "path"="/kunden/{id}",
 *             "requirements"={"id"="[A-Z\d*]{8}"},
 *         }
 *     }
 * )
 * @ORM\Entity(repositoryClass=KundeRepository::class)
 * @ORM\Table(name="std.tbl_kunden")
 */
class Kunde implements SoftDeletable
{
    use HasSoftDelete;

    /**
     * TODO ab Symfony 5.2 UUID
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(type="string", length=8)
     */
    private string $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private string $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private string $vorname;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $firma;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\DateTime()
     */
    private ?DateTimeInterface $geburtsdatum;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $geschlecht;

    /**
     * @ORM\Column(type="text")
     * @Assert\Email(normalizer="trim")
     */
    private ?string $email;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private int $vermittler_id;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getFirma(): ?string
    {
        return $this->firma;
    }

    public function setFirma(?string $firma): self
    {
        $this->firma = $firma;

        return $this;
    }

    public function getGeburtsdatum(): ?DateTimeInterface
    {
        return $this->geburtsdatum;
    }

    public function setGeburtsdatum(?DateTimeInterface $geburtsdatum): self
    {
        $this->geburtsdatum = $geburtsdatum;

        return $this;
    }

    public function getGeschlecht(): ?Geschlecht
    {
        return $this->geschlecht
            ? new Geschlecht($this->geschlecht)
            : null;
    }

    public function setGeschlecht(?Geschlecht $geschlecht): self
    {
        $this->geschlecht = $geschlecht
            ? (string) $geschlecht
            : null;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getVermittlerId(): int
    {
        return $this->vermittler_id;
    }

    public function setVermittlerId(int $vermittler_id): self
    {
        $this->vermittler_id = $vermittler_id;

        return $this;
    }
}
