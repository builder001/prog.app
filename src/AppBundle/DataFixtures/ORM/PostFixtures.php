<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Translation\PostTranslation;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post;


class PostFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $post1 = new Post();
        $post1->setTitle('The opening of the organization');
        $post1->addTranslation(new PostTranslation('uk','title','Ми відкрилися!'));
        $post1->setSlug('the-opening-of-the-organization');
        $post1->setContent('Our organization opening took place in July 2014.');
        $post1->addTranslation(new PostTranslation('uk', 'content','Відкриття нашої організації відбулося в липні 2014 року.'));
        $manager->persist($post1);
        $manager->flush();
    }
}
