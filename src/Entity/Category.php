<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: 'text')]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $status = true;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Attribute::class, orphanRemoval: true)]
    private Collection $attributes;

    public function __construct()
    {
        $this->attributes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Collection<int, Attribute>
     */
    public function getAttributes(): Collection
    {
        return $this->attributes;
    }

    public function addAttribute(Attribute $attribute): static
    {
        if (!$this->attributes->contains($attribute)) {
            $this->attributes->add($attribute);
            $attribute->setCategory($this);
        }

        return $this;
    }

    public function removeAttribute(Attribute $attribute): static
    {
        if ($this->attributes->removeElement($attribute)) {
            // set the owning side to null (unless already changed)
            if ($attribute->getCategory() === $this) {
                $attribute->setCategory(null);
            }
        }

        return $this;
    }
} 