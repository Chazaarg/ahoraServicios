<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServicioRepository")
 */
class Servicio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Oficio", mappedBy="servicio")
     */
    private $oficios;

    public function __construct()
    {
        $this->oficios = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return Collection|Oficio[]
     */
    public function getOficios(): Collection
    {
        return $this->oficios;
    }

    public function addOficio(Oficio $oficio): self
    {
        if (!$this->oficios->contains($oficio)) {
            $this->oficios[] = $oficio;
            $oficio->setServicio($this);
        }

        return $this;
    }

    public function removeOficio(Oficio $oficio): self
    {
        if ($this->oficios->contains($oficio)) {
            $this->oficios->removeElement($oficio);
            // set the owning side to null (unless already changed)
            if ($oficio->getServicio() === $this) {
                $oficio->setServicio(null);
            }
        }

        return $this;
    }
}
