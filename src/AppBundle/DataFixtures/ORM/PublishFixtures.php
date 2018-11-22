<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Translation\PublishTranslation;
use AppBundle\Entity\Publish;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PublishFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $publish1 = new Publish();
        $publish1->setSlug('http://www.eurasiabio.ru/images/EurasiaBio-2010/Archieve/Congress%20Book/Medicine_part1.pdf');
        $publish1->setContent('I. Rechkiman, “International certification and quality assurance of drugs / substances from the CIS”, Track 1. [II International Congress "EurasiaBio 2010", HEALTH & MEDICINE April 13 - 15, 2010.');
        $publish1->addTranslation(new PublishTranslation('uk','content','Речкіман І.Е. “Міжнародна сертифікація та підтвердження якості препаратів/субстанцій з СНД”, Напрямок 1. 2-й Міжнародний конгрес "Євразія Біо 2010", здоров\'я та медицина.'));
        $manager->persist($publish1);

        $publish2 = new Publish();
        $publish2->setSlug('');
        $publish2->setContent('Shtangey S.V., Tereshchenko A.I. Development of the structural scheme of information and communication technologies for monitoring of business processes / Shtangey S.V., Tereshchenko A.I. / First International Scientific-Practical Conference “Problems of Infocommunications. Science and Technology” (PIC S&T-2014) Conference Proceedings. – Kharkiv, Ukraine, KNURE, 2014. – 194 p., p. 102-104.');
        $publish2->addTranslation(new PublishTranslation('uk','content','Штангей С.В., Терещенко А.І. Розробка структурної схеми інформаційно-комунікаційної технології моніторингу бізнес процесів підприємства /Штангей С.В., Терещенко А.І./ Друга міжнародна науково-практична конференція "Проблеми інфокомунікацій. Наука і технології" (PIC S&T-2014). – Х. ХНУРЕ, 2014. – 194 с., с. 102-104.'));
        $manager->persist($publish2);

        $publish3 = new Publish();
        $publish3->setSlug('');
        $publish3->setContent(' 2017 4th International Scientific-Practical Conference Problems of Infocommunications Science and Technology (PIC S&T`2017) CONFERENCE PROGRAMME October 10-13, 2017 Kharkiv, Ukraine. 
                                Report at the conference:
                                “Data sources for the complex use information ERP- system of corporate SME”');
        $publish3->addTranslation(new PublishTranslation('uk','content','2017 4th International Scientific-Practical Conference Problems of Infocommunications Science and Technology (PIC S&T`2017) CONFERENCE PROGRAMME October 10-13, 2017 Kharkiv, Ukraine. 
                                                          Report at the conference:
                                                          “Data sources for the complex use information ERP- system of corporate SME” '));
        $manager->persist($publish3);

        $manager->flush();
    }
}