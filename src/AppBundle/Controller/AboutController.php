<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    /**
     * @Route("/about/", name="about_us")
     */
    public function aboutAction()
    {
        $title = 'About us';
        return $this->render('about/about.html.twig',['title'=>$title]);
    }
}