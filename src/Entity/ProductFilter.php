<?php

namespace App\Entity;

use App\Repository\ProductFilterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductFilterRepository::class)]
class ProductFilter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idProduct = null;

    #[ORM\Column]
    private ?int $idFilter = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(int $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getIdFilter(): ?int
    {
        return $this->idFilter;
    }

    public function setIdFilter(int $idFilter): self
    {
        $this->idFilter = $idFilter;

        return $this;
    }
}
