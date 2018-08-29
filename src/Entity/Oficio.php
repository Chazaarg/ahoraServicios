<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OficioRepository")
 */
class Oficio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $idOficio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $idOferente;

    public function getIdOficio(): ?int
    {
        return $this->idOficio;
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

    public function getIdOferente(): ?int
    {
        return $this->idOferente;
    }

    public function setIdOferente(int $idOferente): self
    {
        $this->idOferente = $idOferente;

        return $this;
    }
}
