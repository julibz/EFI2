<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PedidoRepository")
 */
class Pedido
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
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime", nullable=false)
     * @ORM\Version
     */
    private $createAt = null;

    public function __construct()
    {
        $this->createAt = new \DateTime();
        
    }



    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="string", length=255)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_y_apellido", type="string", length=255)
     */
    private $nombreyapellido;

    /**
     * @return string
     */
    public function getNombreyapellido()
    {
        return $this->nombreyapellido;
    }

    /**
     * @param string $nombreyapellido
     */
    public function setNombreyapellido($nombreyapellido)
    {
        $this->nombreyapellido = $nombreyapellido;
    }
    

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=255)
     */
    private $documento;

    /**
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param string $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_entrega_estimada", type="date")
     */
    private $fechaEntregaEstim;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=50)
     */
    private $user;

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
    

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
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Pedido
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    

    /**
     * Set importe
     *
     * @param string $importe
     *
     * @return Pedido
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Pedido
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fechaEntregaEstim
     *
     * @param \DateTime $fechaEntregaEstim
     *
     * @return Pedido
     */
    public function setFechaEntregaEstim($fechaEntregaEstim)
    {
        $this->fechaEntregaEstim = $fechaEntregaEstim;

        return $this;
    }

    /**
     * Get fechaEntregaEstim
     *
     * @return \DateTime
     */
    public function getFechaEntregaEstim()
    {
        return $this->fechaEntregaEstim;
    }

//    /**
//     * One User has one Pedido.
//     * @OneToOne(targetEntity="User")
//     * @JoinColumn(name="user_id", referencedColumnName="id")
//     */
//    private $user;
//
//    /**
//     * @return mixed
//     */
//    public function getUser()
//    {
//        return $this->user;
//    }
//
//    /**
//     * @param mixed $user
//     */
//    public function setUser($user)
//    {
//        $this->user = $user;
//    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modelo", inversedBy="modelo")
     * @ORM\JoinColumn(name="modelo_id", referencedColumnName="id")
     */
    protected $modelo;

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Color", inversedBy="color")
     * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
     */
    private $color;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    
}

