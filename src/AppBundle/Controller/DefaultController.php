<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;




/**
 * Modelo controller
 *
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/enviar", name="Envio")
     */
    public function sendEmail(Request $request)
    {

        $desde=$request->request->get("desde");
        //$cuerpo=$request->request->get("mensaje");
        $titulo=$request->request->get("nombre");
        $mensaje=$request->request->get("mensaje");

        $message = \Swift_Message::newInstance()
            ->setSubject("Nueva consulta de ". $titulo)
            ->setFrom($desde)
            ->setTo("testpp12016@gmail.com")
            ->setBody($mensaje.' Responder a: '.$desde)
        ;
        $this->get('mailer')->send($message);
        return $this->render('base.html.twig',[
                'base_dir'=> realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
