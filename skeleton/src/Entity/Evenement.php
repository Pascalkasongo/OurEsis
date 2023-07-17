<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeEvenement = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $Event_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeEvenement(): ?string
    {
        return $this->TypeEvenement;
    }

    public function setTypeEvenement(string $TypeEvenement): static
    {
        $this->TypeEvenement = $TypeEvenement;

        return $this;
    }

    public function getEventAt(): ?\DateTimeImmutable
    {
        return $this->Event_at;
    }

    public function setEventAt(\DateTimeImmutable $Event_at): static
    {
        $this->Event_at = $Event_at;

        return $this;
    }
}
