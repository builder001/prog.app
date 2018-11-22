<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    /**
     * @Route("/{_locale}",defaults={"_locale":"en"},requirements={"_locale":"en|uk"}, name="homepage")
     */
    public function indexAction()
    {
        return $this->render('page/index.html.twig');
    }

    /**
     * @Route("/idea/",name="ideas")
     */
    public function ideaAction()
    {
       return $this->render('page/ideas.html.twig');
    }
    /**
     * @Route("/strategy/",name="strategies")
     */
    public function strategyAction()
    {
        return $this->render('page/strategies.html.twig');
    }
    /**
     * @Route("/news/",defaults={"page":"1"},name="news", methods={"GET"})
     * @Route("/news/{page}",requirements={"page":"[1-9]\d*"},name="news_paginated", methods={"GET"})
     * @Cache(smaxage="10")
     */
    public function newsAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Post')->getLatestPost($page);
        return $this->render('page/news.html.twig', ['posts'=>$posts]);
    }
    /**
     * @Route("/news/{slug}",name="news_post", methods={"GET"})
     */
    public function newsShowAction(Post $post)
    {
        return $this->render('page/news_show.html.twig',['post'=>$post]);
    }
}
