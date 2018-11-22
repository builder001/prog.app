<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivityController extends Controller
{
    /**
     * @Route("/activity/",name="activities")
     */
    public function activityAction()
    {
        $em = $this->getDoctrine()->getManager();
        $activities = $em->getRepository('AppBundle:Activity')->getLatestActivity();
        return $this->render('activity/activity.html.twig',['activities'=>$activities]);
    }
}