<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Translation\ActivityTranslation;
use AppBundle\Entity\Activity;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class ActivityFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $activity = new Activity();
        $activity->setContent('PURPOSE (AIMS) AND ACTIVITY OF THE ORGANIZATION
The main aim of the organization is a public-benefit educational, research, innovation and charitable activities aimed at the promotion and development of cooperation between Ukraine and the urban community of European and other international corporations and individuals, public organizations in the fields of human and animal health, safety, environmental protection, agriculture, infocommunication. The main objectives of the Organization are:
To support (including charity) and comprehensively disseminate knowledge in society in accordance with the main objective;
To promote international cooperation between Ukraine and including local communities and institutions, businesses and individuals in the areas as for the purpose;
To promote and improve the convergence of Ukrainian and international certification (legalization) of the legal framework in the areas defined in main objective;
To promote investment in Ukrainian and local economy in the fields defined in main objective;
To initiate, facilitate the discovery, development, financing, promotion and other incentive programs (projects) and activities, scholarships, bonus funds, grants in the field of European and international cooperation (including charity) defined in main objective;
To promote standardization and certification (legalization) of Ukrainian and local goods (including food and drinks) at the European and international certification organizations in the areas defined in main objective;
Direction of the organization activities are:
Organization and conducting of theoretical and scientific conferences, debates, cases, roundtables and other events;
Promotion of the establishment of a modern regulatory framework, its support and analytical software provision;
Participation in the preparation and dissemination of analytical, scientific, informational materials and expert opinions;
Organization and provision of meetings with prominent scholars, politicians, artists, prominent businessmen;
Participation in the preparation and dissemination of educational materials among the general public and specific categories of population;
Support for international affairs, the conclusion of international agreements, participation in activities that do not conflict with the international obligations of Ukraine and legislation, establishing or joining the international community (non-governmental) organizations;
Conducting independent opinion polls on issues of concern to young people;
Participation in shaping of public opinion through appearance in the media, lecture propaganda and other means that do not contradict the laws of Ukraine.
To achieve the goal and to fulfill the objectives the Organization shall be entitled according to the legislation:
To represent and protect the interests of the organization and its members in the bodies of state power and administration, local self-government, non-governmental institutions;
To initiate and carry out cooperation with legislative, executive, judiciary bodies and local government, non-governmental organizations. To participate in and contribute to the practical implementation of national, regional and local programs;
To implement its own programs and projects, to participate in programs and projects, including joint ventures with domestic and foreign organizations;
To conduct publishing activities by creating publishers, cooperate with relevant news and information centers of the agencies, set up its own electronic, print and other media;
To participate in the implementation of information- resources, financial and technical support of research and educational institutions, scholars and teachers, trainees and students;
To receive information to implement the goals and objectives of the Organization from the state authorities, local self-government;
To accumulate funds to finance statutory bodies;
To carry out necessary economic and commercial activities by creating self-financing institutions and organizations with the status of a legal entity;
To collaborate with state agencies and public organizations, to join NGOs unions;
To identify legislative initiatives and make proposals to the authorities and control bodies;
To exercise other activities that comply with the legislation of Ukraine and the statutory objectives of the Organization in the interests of the Organization. The organization does not deal with political, religious and other forms of any activity not related to its main purpose and the main tasks and does not allow to use its name. The focus of the Organization activity is human and animal health, labor safety, environmental safety, the progress of agriculture, the spread of advanced information and communication technologies, sustainable development of Ukraine and facilitation of the growth of its international credibility and cooperation.');
        $activity->addTranslation(new ActivityTranslation('uk','content','Напрямками діяльності громадської організації "Прогресія" є організація та проведення теоретичних та науково-практичних конференцій, круглих столів. Ми сприяємо створенню сучасної нормативно-правової бази, займаємося її підтримкою та інформаційно-аналітичним забезпеченням. Приймається участь у підготовці та розповсюдженні аналітичних, наукових, інформаційних матеріалів, експертних висновків, організовуються зустрічі з політичними діячами, підприємцями, вченими. 
Наша організація бере участь у підготовці та розповсюдженні серед широких кіл громадськості та конкретних категорій населення просвітницьких матеріалів. Ми підтримуємо міжнародні зв\'язки, укладаємо міжнародні угоди.'));
        $manager->persist($activity);

        $manager->flush();
    }

}