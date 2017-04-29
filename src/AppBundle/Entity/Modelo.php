<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Modelo
 *
 * @ORM\Table(name="modelo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModeloRepository")
 */
class Modelo
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
     * @ORM\Column(name="nombre_modelo", type="string", length=255)
     */
    private $nombreModelo;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria_modelo", type="string", length=255)
     */
    private $categoriaModelo;

    /**
     * @return string
     */
    public function getCategoriaModelo()
    {
        return $this->categoriaModelo;
    }

    /**
     * @param string $categoriaModelo
     */
    public function setCategoriaModelo($categoriaModelo)
    {
        $this->categoriaModelo = $categoriaModelo;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_modelo", type="string", length=255)
     */
    private $descripcionModelo;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_modelo", type="string", length=255)
     */
    private $imagenModelo;


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
     * Set nombreModelo
     *
     * @param string $nombreModelo
     *
     * @return Modelo
     */
    public function setNombreModelo($nombreModelo)
    {
        $this->nombreModelo = $nombreModelo;

        return $this;
    }

    /**
     * Get nombreModelo
     *
     * @return string
     */
    public function getNombreModelo()
    {
        return $this->nombreModelo;
    }

    /**
     * Set descripcionModelo
     *
     * @param string $descripcionModelo
     *
     * @return Modelo
     */
    public function setDescripcionModelo($descripcionModelo)
    {
        $this->descripcionModelo = $descripcionModelo;

        return $this;
    }

    /**
     * Get descripcionModelo
     *
     * @return string
     */
    public function getDescripcionModelo()
    {
        return $this->descripcionModelo;
    }

    /**
     * Set imagenModelo
     *
     * @param string $imagenModelo
     *
     * @return Modelo
     */
    public function setImagenModelo($imagenModelo)
    {
        $this->imagenModelo = $imagenModelo;

        return $this;
    }

    /**
     * Get imagenModelo
     *
     * @return string
     */
    public function getImagenModelo()
    {
        return $this->imagenModelo;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="precio_modelo", type="string", length=255)
     */
    private $precio;

    /**
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param string $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }


    public function __toString()
    {
        return (string) $this->nombreModelo  ;
    }
    /** 
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Pedido", mappedBy="pedido")
     */
    protected $pedido;

    /**
     * @return mixed
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @param mixed $pedido
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;
    }


}

