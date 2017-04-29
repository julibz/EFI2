<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Color
 *
 * @ORM\Table(name="color")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ColorRepository")
 */
class Color
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_color", type="string", length=255)
     */
    private $nombreColor;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilidad_color", type="boolean")
     */
    private $disponibilidadColor;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreColor
     *
     * @param string $nombreColor
     *
     * @return Color
     */
    public function setNombreColor($nombreColor)
    {
        $this->nombreColor = $nombreColor;

        return $this;
    }

    /**
     * Get nombreColor
     *
     * @return string
     */
    public function getNombreColor()
    {
        return $this->nombreColor;
    }

    /**
     * Set disponibilidadColor
     *
     * @param boolean $disponibilidadColor
     *
     * @return Color
     */
    public function setDisponibilidadColor($disponibilidadColor)
    {
        $this->disponibilidadColor = $disponibilidadColor;

        return $this;
    }

    /**
     * Get disponibilidadColor
     *
     * @return bool
     */
    public function getDisponibilidadColor()
    {
        return $this->disponibilidadColor;
    }
    public function __toString()
    {
        return (string) $this->nombreColor;
    }
}

