<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $productName = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $about = null;

    #[ORM\Column(length: 255)]
    private ?string $pathToImage = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $images = [];

    #[ORM\Column]
    private ?float $size = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Fav::class)]
    private Collection $favoris;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Notice::class)]
    private Collection $notices;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?Cart $cart = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: Filter::class)]
    private Collection $filters;

    public function __construct()
    {
        $this->favoris = new ArrayCollection();
        $this->notices = new ArrayCollection();
        $this->filters = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(string $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getPathToImage(): ?string
    {
        return $this->pathToImage;
    }

    public function setPathToImage(string $pathToImage): self
    {
        $this->pathToImage = $pathToImage;

        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(float $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return Collection<int, Fav>
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(Fav $favori): self
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris->add($favori);
            $favori->setProduct($this);
        }

        return $this;
    }

    public function removeFavori(Fav $favori): self
    {
        if ($this->favoris->removeElement($favori)) {
            // set the owning side to null (unless already changed)
            if ($favori->getProduct() === $this) {
                $favori->setProduct(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Notice>
     */
    public function getNotices(): Collection
    {
        return $this->notices;
    }

    public function addNotice(Notice $notice): self
    {
        if (!$this->notices->contains($notice)) {
            $this->notices->add($notice);
            $notice->setProduct($this);
        }

        return $this;
    }

    public function removeNotice(Notice $notice): self
    {
        if ($this->notices->removeElement($notice)) {
            // set the owning side to null (unless already changed)
            if ($notice->getProduct() === $this) {
                $notice->setProduct(null);
            }
        }

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @return Collection<int, Filter>
     */
    public function getFilters(): Collection
    {
        return $this->filters;
    }

    public function addFilter(Filter $filter): self
    {
        if (!$this->filters->contains($filter)) {
            $this->filters->add($filter);
            $filter->setProduct($this);
        }

        return $this;
    }

    public function removeFilter(Filter $filter): self
    {
        if ($this->filters->removeElement($filter)) {
            // set the owning side to null (unless already changed)
            if ($filter->getProduct() === $this) {
                $filter->setProduct(null);
            }
        }

        return $this;
    }

}
