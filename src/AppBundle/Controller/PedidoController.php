<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pedido;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pedido controller.
 *
 * @Route("pedido")
 */
class PedidoController extends Controller
{
    /**
     * Lists all pedido entities.
     *
     * @Route("/admin/", name="pedido_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pedidos = $em->getRepository('AppBundle:Pedido')->findAll();

        return $this->render('pedido/index.html.twig', array(
            'pedidos' => $pedidos,
        ));
    }
//
//    /**
//     * Lists all pedido entities.
//     *
//     * @Route("/mis_pedidos/", name="pedido_index3")
//     * @Method("GET")
//     */
//    public function MisPedidos()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $pedidos = $em->getRepository('AppBundle:Pedido')->findAll();
//
//        return $this->render('pedido/mis_pedidos.html.twig', array(
//            'pedidos' => $pedidos,
//        ));
//    }

    /**
     * Creates a new pedido entity.
     *
     * @Route("/new", name="pedido_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pedido = new Pedido();
        $form = $this->createForm('AppBundle\Form\PedidoType', $pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pedido);
            $em->flush($pedido);
            
            
            return $this->redirectToRoute('pedido_show', array('id' => $pedido->getId()));
        }

        return $this->render('pedido/new.html.twig', array(
            'pedido' => $pedido,
            'form' => $form->createView(),
        ));

    }


//    /**
//     * @Route("/pedido/new", name="enviar")
//     */
//    public function sendEmail(Request $request)
//    {
//
//        $nombre=$request->request->get("form.nombreyapellido");
//        $documento=$request->request->get("documento");
//        $mail=$request->request->get("mail");
//        $creado=$request->request->get("creado");
//        $importe=$request->request->get("importe");
//        $observacion=$request->request->get("observacion");
//        $fechaentrega=$request->request->get("fechadeentrega");
//        $modelo=$request->request->get("modelo");
//        $color=$request->request->get("color");
//
//
//        $message = \Swift_Message::newInstance()
//            ->setSubject("Nueva consulta de ". $nombre)
//            ->setFrom("testpp12016@gmail.com")
//            ->setTo("testpp12016@gmail.com")
//            ->setBody('Se ha registrado un nuevo pedido de: '.$nombre. '. Dni: '.$documento.'. Del modelo: '.$modelo.'. Color: '. $color. '. Para la fecha: '.$fechaentrega .' Responder a: '. $mail)
//        ;
//        $this->get('mailer')->send($message);
//        return $this->render('pedido/show.html.twig',[
//            'base_dir'=> realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
//        ]);
//    }

    /**
     * Finds and displays a pedido entity.
     *
     * @Route("/admin/{id}", name="pedido_show")
     * @Method("GET")
     */
    public function showAction(Pedido $pedido)
    {
        $deleteForm = $this->createDeleteForm($pedido);

        return $this->render('pedido/show.html.twig', array(
            'pedido' => $pedido,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pedido entity.
     *
     * @Route("/admin/edit/{id}", name="pedido_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Pedido $pedido)
    {
        $deleteForm = $this->createDeleteForm($pedido);
        $editForm = $this->createForm('AppBundle\Form\PedidoType', $pedido);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pedido_edit', array('id' => $pedido->getId()));
        }

        return $this->render('pedido/edit.html.twig', array(
            'pedido' => $pedido,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pedido entity.
     *
     * @Route("/admin/{id}", name="pedido_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Pedido $pedido)
    {
        $form = $this->createDeleteForm($pedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pedido);
            $em->flush($pedido);
        }

        return $this->redirectToRoute('pedido_index');
    }

    /**
     * Creates a form to delete a pedido entity.
     *
     * @param Pedido $pedido The pedido entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pedido $pedido)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pedido_delete', array('id' => $pedido->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
