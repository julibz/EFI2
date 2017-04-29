<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * Prueba controller
 *
 * @Route("/")
 */
class PruebaController extends Controller
{
    /**
     * @Route("/prueba")
     */
    public function indexAction()
    {
        $array=array(
            array('nombre'=>"Julian", 'cuit'=> "23387312609"),
            array('nombre'=>"Julian2", 'cuit'=>"23387312609"),
            array('nombre'=>"Julian3", 'cuit'=> "23387312609")
        );
        return $this->render(':default:prueba.hmtl.twig',
            array('valores'=>$array));
    }

}
