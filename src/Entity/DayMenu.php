<?php

namespace App\Entity;

use App\Repository\DayMenuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DayMenuRepository::class)
 */
class DayMenu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entree;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $plat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dessert;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getEntree(): ?string
    {
        return $this->entree;
    }

    public function setEntree(?string $entree): self
    {
        $this->entree = $entree;

        return $this;
    }

    public function getPlat(): ?string
    {
        return $this->plat;
    }

    public function setPlat(?string $plat): self
    {
        $this->plat = $plat;

        return $this;
    }

    public function getDessert(): ?string
    {
        return $this->dessert;
    }

    public function setDessert(?string $dessert): self
    {
        $this->dessert = $dessert;

        return $this;
    }
}
