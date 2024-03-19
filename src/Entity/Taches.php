<?php

namespace App\Entity;

use App\Repository\TachesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: TachesRepository::class)]
#[Broadcast]
class Taches
{
    #[ORM\Id]
    #[ORM\GeneratedValue]

    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titletaches = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptiontaches = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $textetaches = null;

    #[ORM\Column]
    private ?int $DureeTaches = null;

/////////////////////

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getTitletaches(): ?string
    {
        return $this->titletaches;
    }

    public function setTitletaches(string $titletaches): static
    {
        $this->titletaches = $titletaches;

        return $this;
    }



    public function getDescriptiontaches(): ?string
    {
        return $this->descriptiontaches;
    }

    public function setDescriptiontaches(string $descriptiontaches): static
    {
        $this->descriptiontaches = $descriptiontaches;

        return $this;
    }



    public function getTextetaches(): ?string
    {
        return $this->textetaches;
    }

    public function setTextetaches(?string $textetaches): static
    {
        $this->textetaches = $textetaches;

        return $this;
    }

    public function getDureeTaches(): ?int
    {
        return $this->DureeTaches;
    }

    public function setDureeTaches(int $DureeTaches): static
    {
        $this->DureeTaches = $DureeTaches;

        return $this;
    }
}

