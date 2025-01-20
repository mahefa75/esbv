<?php

namespace App\Entity;

use App\Repository\OptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionRepository::class)]
#[ORM\Table(name: '`option`')]
class Option
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $value = null;

    #[ORM\Column]
    private ?int $orderNum = null;

    #[ORM\ManyToOne(inversedBy: 'options')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Attribute $attribute = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): static
    {
        $this->value = $value;
        return $this;
    }

    public function getOrderNum(): ?int
    {
        return $this->orderNum;
    }

    public function setOrderNum(int $orderNum): static
    {
        $this->orderNum = $orderNum;
        return $this;
    }

    public function getAttribute(): ?Attribute
    {
        return $this->attribute;
    }

    public function setAttribute(?Attribute $attribute): static
    {
        $this->attribute = $attribute;
        return $this;
    }
} 