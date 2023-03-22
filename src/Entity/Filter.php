<?php

namespace App\Entity;

use App\Repository\FilterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilterRepository::class)]
class Filter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private array $filterSize = [];

    #[ORM\Column]
    private array $mark = [];

    #[ORM\ManyToOne(inversedBy: 'filters')]
    private ?Product $product = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilterSize(): array
    {
        return $this->filterSize;
    }

    public function setFilterSize(array $filterSize): self
    {
        $this->filterSize = $filterSize;

        return $this;
    }

    public function getMark(): array
    {
        return $this->mark;
    }

    public function setMark(array $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }
}
