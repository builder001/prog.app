<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublishController extends Controller
{
    /**
     * @Route("/publish/", name="publishing")
     */
    public function publishAction()
    {
        $em = $this->getDoctrine()->getManager();
        $publishing = $em->getRepository('AppBundle:Publish')->getLatestPub();
        return $this->render('publish/publish.html.twig',['publishing'=>$publishing]);
    }
}