<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Translation\PartnerTranslation;
use AppBundle\Entity\Partner;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PartnerFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $partner1 = new Partner();
        $partner1->setSlug('');
        $partner1->setContent('One of our partners is the enterprise «Data Management Med-High-Tech GmbH» which is located in Wiesbaden (Federal Land Hessen, Germany). Registration info: HRB 23406 - Fall 1 beim Amtsgericht Wiesbaden, International tax number / sales tax identification number: DE258359781. The main fields of activity are embedding, supporting medical projects (mainly pharmaceuticals) including the very initial stages of the movement. Primarily this product registrations and Drug Regulatory Affairs, and all connected with it, everything around it, including testing, data processing, etc.');
        $partner1->addTranslation(new PartnerTranslation('uk','content','Одним з наших партнерів є підприємство "Data Management Med-High-Tech GmbH", що знаходиться в м. Вісбаден (Федеральна Земля Хессен, Німеччина). Реєстраційні дані: HRB 23406 - Fall 1 beim Amtsgericht Wiesbaden, міжнародний податковий номер / sales tax identification number: DE258359781. 
Головна сфера діяльності - впровадження, супровід медичних проектів (в основному це фармпрепарати), включаючи самі початкові етапи руху. У першу чергу це реєстрація препаратів Drug Regulatory Affairs і все, що з цим пов\'язано, все, що навколо цього, включаючи випробування, обробку даних і т.і.'));
        $manager->persist($partner1);

        $partner2 = new Partner();
        $partner2->setSlug('');
        $partner2->setContent('Also we are working with:');
        $partner2->addTranslation(new PartnerTranslation('uk','content','Також ми працюємо з:'));
        $manager->persist($partner2);

        $partner3 = new Partner();
        $partner3->setSlug('');
        $partner3->setContent('The weekly journal Pharmacy');
        $partner3->addTranslation(new PartnerTranslation('uk','content','Еженедельник Аптека'));
        $manager->persist($partner3);

        $partner4 = new Partner();
        $partner4->setSlug('');
        $partner4->setContent('Ukrkomekspo company');
        $partner4->addTranslation(new PartnerTranslation('uk','content','Компанія УкрКомЕкспо'));
        $manager->persist($partner4);

        $partner5 = new Partner();
        $partner5->setSlug('');
        $partner5->setContent('Mechnikov Institute of Microbiology and Immunology of National Academy of Medical sciences of Ukraine');
        $partner5->addTranslation(new PartnerTranslation('uk','content','ГУ "Институт микробиологии и иммунологии им. И.И.Мечникова АМН Украины"'));
        $manager->persist($partner5);

        $partner6 = new Partner();
        $partner6->setSlug('');
        $partner6->setContent('ASAP Group');
        $partner6->addTranslation(new PartnerTranslation('uk','content','ASAP Group'));
        $manager->persist($partner6);

        $partner7 = new Partner();
        $partner7->setSlug('http://www.knmu.kharkov.ua/');
        $partner7->setContent('Research Institute of Occupational Hygiene and Occupational Diseases of KhNMU');
        $partner7->addTranslation(new PartnerTranslation('uk','content','НДІ гігієни праці та професійних захворювань ХНМУ'));
        $manager->persist($partner7);

        $partner8 = new Partner();
        $partner8->setSlug('http://www.social.org.ua/');
        $partner8->setContent('Social Insurance Fund from industrial accidents and occupational diseases Ukraine');
        $partner8->addTranslation(new PartnerTranslation('uk','content','Фонд соціального страхування від нещасних випадків на виробництві та професійних захворювань України'));
        $manager->persist($partner8);

        $manager->flush();
    }

}