<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\BundeslandRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BundeslandRepository::class)
 * @ORM\Table(name="public.bundesland")
 */
class Bundesland
{
    /**
     * @ORM\Id
     * @ORM\Column(name="kuerzel", type="string", length=2)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private string $id;

    /**
     * @ORM\Column(type="text")
     */
    private string $name;

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
}
