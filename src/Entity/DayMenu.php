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
     * @ORM\Column(type="float", nullable=true)
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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Subtitle1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Subtitle2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Subtitle3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

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

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getSubtitle1(): ?string
    {
        return $this->Subtitle1;
    }

    public function setSubtitle1(?string $Subtitle1): self
    {
        $this->Subtitle1 = $Subtitle1;

        return $this;
    }

    public function getSubtitle2(): ?string
    {
        return $this->Subtitle2;
    }

    public function setSubtitle2(?string $Subtitle2): self
    {
        $this->Subtitle2 = $Subtitle2;

        return $this;
    }

    public function getSubtitle3(): ?string
    {
        return $this->Subtitle3;
    }

    public function setSubtitle3(string $Subtitle3): self
    {
        $this->Subtitle3 = $Subtitle3;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }
}
