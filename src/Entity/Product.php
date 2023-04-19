<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[Vich\Uploadable]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(nullable: true)]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $productName = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $about = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName2 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName3 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName4 = null;

    #[UploadableField(mapping:"product_images", fileNameProperty:"imageName")]
    private ?File $imageFile = null;

    #[UploadableField(mapping:"product_images", fileNameProperty:"imageName2")]
    private ?File $imageFile2 = null;

    #[UploadableField(mapping:"product_images", fileNameProperty:"imageName3")]
    private ?File $imageFile3 = null;

    #[UploadableField(mapping:"product_images", fileNameProperty:"imageName4")]
    private ?File $imageFile4 = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt2 = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt3 = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt4 = null;

    #[ORM\Column(nullable: true)]
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

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile2
     */
    public function setImageFile2(?File $imageFile2 = null): void
    {
        $this->imageFile2 = $imageFile2;

        if (null !== $imageFile2) {
            $this->updatedAt2 = new \DateTimeImmutable();
        }
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile3
     */
    public function setImageFile3(?File $imageFile3 = null): void
    {
        $this->imageFile3 = $imageFile3;

        if (null !== $imageFile3) {
            $this->updatedAt3 = new \DateTimeImmutable();
        }
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile4
     */
    public function setImageFile4(?File $imageFile4 = null): void
    {
        $this->imageFile4 = $imageFile4;

        if (null !== $imageFile4) {
            $this->updatedAt4 = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getImageFile2(): ?File
    {
        return $this->imageFile2;
    }

    public function getImageFile3(): ?File
    {
        return $this->imageFile3;
    }

    public function getImageFile4(): ?File
    {
        return $this->imageFile4;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function setImageName2(?string $imageName2): void
    {
        $this->imageName2 = $imageName2;
    }

    public function setImageName3(?string $imageName3): void
    {
        $this->imageName3 = $imageName3;
    }

    public function setImageName4(?string $imageName4): void
    {
        $this->imageName4 = $imageName4;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function getImageName3(): ?string
    {
        return $this->imageName3;
    }

    public function getImageName4(): ?string
    {
        return $this->imageName4;
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
