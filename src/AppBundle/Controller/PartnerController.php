<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartnerController extends Controller
{
    /**
     * @Route("/partner/",name="partners")
     */
    public function partnerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $partners = $em->getRepository('AppBundle:Partner')->getPartner();
        return $this->render('partner/partner.html.twig',['partners'=>$partners]);
    }
}