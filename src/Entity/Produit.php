<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\PseudoTypes\Numeric_;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $Name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 150)]
    private ?string $Thumbnail = null;

    #[ORM\Column]
    private ?int $Stock = null;

    #[ORM\ManyToMany(targetEntity: categories::class)]
    private Collection $category_id;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2)]
    private ?float $price = null;

    #[ORM\Column]
    private ?float $alcohol = null;

    #[ORM\Column]
    private ?float $volume = null;

    #[ORM\Column(length: 100)]
    private ?string $color = null;

    #[ORM\Column(length: 100)]
    private ?string $colorhex = null;

    public function __construct()
    {
        $this->category_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->Thumbnail;
    }

    public function setThumbnail(string $Thumbnail): static
    {
        $this->Thumbnail = $Thumbnail;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(int $Stock): static
    {
        $this->Stock = $Stock;

        return $this;
    }

    /**
     * @return Collection<int, categories>
     */
    public function getCategoryId(): Collection
    {
        return $this->category_id;
    }

    public function addCategoryId(categories $categoryId): static
    {
        if (!$this->category_id->contains($categoryId)) {
            $this->category_id->add($categoryId);
        }

        return $this;
    }

    public function removeCategoryId(categories $categoryId): static
    {
        $this->category_id->removeElement($categoryId);

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getAlcohol(): ?float
    {
        return $this->alcohol;
    }

    public function setAlcohol(float $alcohol): static
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(float $volume): static
    {
        $this->volume = $volume;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColorHex(): ?string
    {
        return $this->colorhex;
    }

    public function setColorHex(string $color_hex): static
    {
        $this->colorhex = $color_hex;

        return $this;
    }
}
