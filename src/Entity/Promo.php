<?php

namespace App\Entity;

use App\Repository\PromoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromoRepository::class)]
class Promo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(nullable: true)]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codePromo = null;

    #[ORM\Column(nullable: true)]
    private ?int $valuePromo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePromo(): ?string
    {
        return $this->codePromo;
    }

    public function setCodePromo(string $codePromo): self
    {
        $this->codePromo = $codePromo;

        return $this;
    }

    public function getValuePromo(): ?int
    {
        return $this->valuePromo;
    }

    public function setValuePromo(int $valuePromo): self
    {
        $this->valuePromo = $valuePromo;

        return $this;
    }
}
