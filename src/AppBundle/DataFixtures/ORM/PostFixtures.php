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

        $post2 = new Post();
        $post2->setTitle('"AGROPORT" exhibition 2014');
        $post2->addTranslation(new PostTranslation('uk', 'title', 'Члени громадської організації "Прогресія" відвідали виставку AGROPORT 2014'));
        $post2->setSlug('agroport-exhibition');
        $post2->setContent('The members of public organization "Progression" have visited the "AGROPORT" exhibition which was held in Kharkiv on 16-18 October 2014. Between the exhibition organizers and its participants has been an exchange of opinions by ways and prospects of output the agricultural enterprises of Kharkiv and Kharkiv region on European market. The two sides agreed to keep in touch and move to cooperate.');
        $post2->addTranslation(new PostTranslation('uk', 'content','Члени громадської організації "Прогресія" відвідали виставку AGROPORT 2014, яка відбувалась в м. Харків 16-18 жовтня 2014 року. З організаторами виставки та її учасниками відбувся обмін думками за шляхами та перспективам виходу підприємств агросектора м.Харкова та Харківської області на Європейські ринки. Співрозмовники домовилися продовжити контакти і перейти до співпраці.'));
        $manager->persist($post2);

        $post3 = new Post();
        $post3->setTitle('Attending in the International Exhibition "Animal Farming Ukraine 2014"');
        $post3->addTranslation(new PostTranslation('uk', 'title', 'Міжнародна виставка з тваринництва та птахівництва Animal Farming Ukraine 2014'));
        $post3->setSlug('international-exhibition');
        $post3->setContent('The leaders of public organization "Progression" have been invited to attend the International Exhibition "Animal Farming Ukraine 2014", which took place on October 28-30 in Kiev International Exhibition Centre.');
        $post3->addTranslation(new PostTranslation('uk', 'content', 'Керівництво громадської організації "Прогресія" отримало запрошення відвідати міжнародну виставку з тваринництва та птахівництва Animal Farming Ukraine 2014, яка відбулася 28-30 жовтня в Києві в Міжнародному виставковому центрі.'));
        $manager->persist($post3);

        $post4 = new Post();
        $post4->setTitle('6 International Medical Forum in Kiev');
        $post4->addTranslation(new PostTranslation('uk','title','6 Міжнародний медицинський форум у Києві'));
        $post4->setSlug('international_med_forum');
        $post4->setContent('The leaders of the organization "Progression" visited 6 International Medical Forum in Kiev, which was held on April 15-17 2015. Forum organizers and organization members have exchanged views on topical issues of Pharmacy production and implementation of GMP standards.');
        $post4->addTranslation(new PostTranslation('uk','content','Керівники організації "Прогресія" відвідали 6 Міжнародний медицинський форум у Києві, який відбувся 15-17 квітня 2015 року. Організатори форуму та члени організації обмінялися думками з актуальних питань фармацевтичного виробництва та впровадження стандартів GMP.'));
        $manager->persist($post4);

        $post5 = new Post();
        $post5->setTitle('A round table of Ukrainian pharmaceutical manufacturers with companies-sellers of EU pharmaceutical products. ');
        $post5->addTranslation(new PostTranslation('uk','title','Зустріч Українських виробників фармацевтичної продукції з Європейськими Продавцями у форматі круглого столу'));
        $post5->setSlug('round-table-meeting');
        $post5->setContent('Following to realities of the present time, namely the convergence of Ukrainian pharmaceutical production with EU market and taking into consideration Ukraine membership in PIC/S the public organization "Progression - Human Technology" in collaboration and with the support of ASAP Group company and other Ukrainian and foreign partners initiates a round table of Ukrainian pharmaceutical manufacturers with companies-sellers of EU pharmaceutical products. 
The main theme of the round table it is a sale of Ukrainian pharmaceutical products on the EU market. Also an event is offered as a platform for business contacts. 
We invite interested persons, organizations and businesses to participate in this event! 
Event date: October 2015, Kiev. 
Letters, suggestions and messages please send to the contact addresses: 
Email:igor.tereshchenko@progression.in.ua, inderevianko@gmail.com 
tel.: +38(098) 817 09 42 (“Progression”), +38(067) 401 25 27 (ASAP Group) 
www.progression.in.ua, www.asapgroup.com.ua');
        $post5->addTranslation(new PostTranslation('uk','content','Шановні Колеги!
УГОДА ПРО ЗОНУ Вільної ТОРГІВЛІ між Україною ТА ЄС відкрила для лікарської продукції / біологічно активних добавок і т.д. і т.п. вільний доступ на європейський ринок. Стандарти якості виробництва повсюдно активно впроваджуються на профільних українських підприємствах, – ніяких квот на товари такого роду з України в Європі також немає і головною проблемою є «лише деякі труднощі» з пошуком збуту для такої продукції у Європі.
В наш час вдається усунути і зазначений бар\'єр!
У жовтні поточного 2015 в Києві планується зустріч Українських виробників з Європейськими Продавцями у форматі круглого столу.
Сподіваємося також, що захід стане і зручним майданчиком для ділових контактів.
Підготовка заходу проводиться за участю громадської організації «Прогресія – технології людині» у співдружності та за підтримки компанії ASAP Group.
Запрошуємо Вас взяти участь у цьому заході!
(Точна дата і місце проведення будуть повідомлені додатково)

Листи, пропозиції, повідомлення прохання надсилати на адреси: 
Email:igor.tereshchenko@progression.in.ua, inderevianko@gmail.com 
тел: +38(098) 817 09 42 (“Прогресія”), +38(067) 401 25 27 (ASAP Group) 
www.progression.in.ua, www.asapgroup.com.ua'));
        $manager->persist($post5);

        $post6 = new Post();
        $post6->setTitle('A conference on marketing in a farmacy business, the 29th of October 2015, Kyiv');
        $post6->addTranslation(new PostTranslation('uk','title','29-го жовтня 2015 р. у Києві відбулася конференція з маркетингу у фарм. бізнесі'));
        $post6->setSlug('conference-marketing-farmacy-29102015');
        $post6->setContent('The 29th of October 2015 in Kyiv held a conference on marketing in a farmacy business (organizer publishing house "Morion"/weekly "Pharmacy" contact person Mr.Paul Kishko, Tel./Fax + 38 044 585 97 10 (ext. 312), Email: kishko@morion.ua).
As a guest speaker and partner of «Data Management Med-High-Tech GmbH» (Germany) and the public organization "Progression - Human Technology" (Ukraine) Mr.Tobias Boltze was attended at the conference and delivered a speech. Marketing agency «Medivendis» www.medivendis.de (Germany).');
        $post6->addTranslation(new PostTranslation('uk','content','29-го жовтня 2015 р. у Києві (готель «Русь») відбулася конференція з маркетингу у фарм. бізнесі (організатор видавничий дім «Моріон»/Тижневик «Аптека», контактна особа пан Павло Кишко, Тел./факс + 38 044 585 97 10 (внутр. 312), Email: kishko@morion.ua).
У якості запрошеного спікера і гостя на конференції був присутній і виступив з доповіддю колега та партнер «Data Management Med-High-Tech GmbH» (Німеччина) та ГО «ПРОГРЕСІЯ – ТЕХНОЛОГІЇ ЛЮДІНІ» (Україна) пан Тобіас Больце (Tobias Boltze) – маркетингове агентство «Medivendis» www.medivendis.de (Німеччина).'));
        $manager->persist($post6);

        $post7 = new Post();
        $post7->setTitle('The German partners of the "Progression - Human Technology" offers cooperation to Ukrainian manufacturers of certified (ISO, GMP) pharmaceutical products and dietary supplements under the terms of franchise');
        $post7->addTranslation(new PostTranslation('uk','title','Німецькі партнери Прогрессії пропонують співпрацю Українським виробникам сертифікованої (ISO, GMP) продукції БАД та фармації на умовах франчайзингу'));
        $post7->setSlug('cooperation-with-ukr-manufacturers-certified');
        $post7->setContent('The German partners of the public organization "Progression - Human Technology" offers cooperation to Ukrainian manufacturers of certified (ISO, GMP) pharmaceutical products and dietary supplements under the terms of franchise:
1.Subject to obtaining the right to exclusive distribution of the Ukrainian certified products under the well-known in EU space trademark the German side incurs all the marketing work and costs in the EU territory.
2. Payment for the sold goods will be performed by the German side on a quarterly basis by the end of each subsequent quarter (for example: for the 3rd quarter of 2016 payment for the sold goods is made by the end of the 4th quarter of 2016).
3. The German side expects taking the registration costs by the Ukrainian producer (Germany / Switzerland / Austria) and supplies of the appropriate amount of goods for sale in Germany / Switzerland / Austria.
Services on registration of goods in Germany / Switzerland / Austria is ready to provide the Data Management Med-High-Tech GmbH company.');
        $post7->addTranslation(new PostTranslation('uk','content','Німецькі партнери Громадської Організації «Прогресія – технології людині» пропонують співпрацю Українським виробникам сертифікованої (ISO, GMP) продукції БАД та фармації на умовах франчайзингу:
1. За умови отримання права ексклюзивної дистрибуції Українського сертифікованого товару під відомою в просторі ЄС торговою маркою, Німецька сторона всі маркетингові роботи і витрати в просторі ЄС бере на себе.
2. Розрахунок за проданий товар буде здійснюватися Німецькою стороною щоквартально до кінця кожного наступного кварталу (наприклад: за 3-й квартал 2016 розрахунок за проданий товар здійснюватимуся до кінця четвертого кварталу 2016).
3. Німецька сторона очікує взяття Українським виробником на себе реєстраційних витрат (Німеччина / Швейцарія / Австрія) і поставок відповідних необхідних запитуваних кількостей товару для продажу у Німеччині / Швейцарії / Австрії.
Послуги з реєстрації товару в Німеччині / Швейцарії / Австрії готова надати компанія Data Management Med-High-Tech GmbH.'));
        $manager->persist($post7);

        $post8 = new Post();
        $post8->setTitle('Annual International Scientific Conference on Economic Development and Legacy of Simon Kuznets, the 26-28 of May, 2016 at Kharkov National University of Economics named after S. Kuznets.');
        $post8->addTranslation(new PostTranslation('uk','title','Участь у щорічній Міжнародній науковій конференції «Економічний розвиток і спадщина Семена Кузнеця» 26 - 28 травня 2016 року у Харківському національному економічному університеті імені Семена Кузнеця.'));
        $post8->setSlug('conference-simon-kuznets-2016');
        $post8->setContent('Participation in the Annual International Scientific Conference on Economic Development and Legacy of Simon Kuznets, the 26-28 of May, 2016 at Kharkov National University of Economics named after S. Kuznets.
Speech the 27 of May on Section 1. Economics: issues of reforms, growth and development with the report: "The process approach to economic reforms, growth and development". The report was prepared with the participation of Data Management Med-High-Tech GmbH (Wiesbaden, Germany).
The report focuses on using of the principles of modern management concepts and their implementation process approach to reform the Ukrainian economy mainly at SME (Small and Medium Enterprises) and universities.
Emphasis is placed on systematized process approach exactly the European partners of Public Organization to the implementation of infrastructure projects in Ukraine. This infrastructure projects on initial financing of Ukraine - the basis of attracting investments for further development.');
        $post8->addTranslation(new PostTranslation('uk','content','Участь у щорічній Міжнародній науковій конференції «Економічний розвиток і спадщина Семена Кузнеця» 26 - 28 травня 2016 року у Харківському національному економічному університеті імені Семена Кузнеця.
Виступ 27 травня на Секції №1 Економічна наука: питання реформ, росту і розвитку з доповіддю: "Процесний підхід до економічних реформ росту та розвитку". Доповідь підготовлена за участю компанії Data Management Med-High-Tech GmbH (Wiesbaden, Germany).
В доповіді увага зосереджена на використанні принципів сучасних концепцій менеджменту і процесного підходу їх реалізації щодо реформування Української економіки переважно на рівні SME (Small and Medium Enterprises) і Вищих Навчальних Закладів.
Зроблені акценти на систематизованому процесному підході саме Європейських партнерів Громадської Організації до реалізації інфраструктурних проектів в Україні. Дані інфраструктурні проекти при первісному фінансуванні України – основа залучення інвестицій для їх подальшого розвитку.'));
        $manager->persist($post8);

        $post9 = new Post();
        $post9->setTitle('IEEE International Scientific-Practical Conference "Problems of Infocommunications. Science and Technology", 4 – 6 October, 2016, Kharkiv');
        $post9->addTranslation(new PostTranslation('uk','title','Представники громадської організації взяли активну участь у міжнародній конференції:
"IEEE International Scientific-Practical Conference "Problems of Infocommunications. Science and Technology", 4 – 6 October, 2016, Kharkiv.'));
        $post9->setSlug('int-conference-4-6-10-2016');
        $post9->setContent('Members of public organization actively participated in the international conference:
IEEE International Scientific-Practical Conference "Problems of Infocommunications. Science and Technology", 4 – 6 October, 2016, Kharkiv.
A presentation was made:
"The application SAP® ERP principles for the development and implementation of corporate integrated information system for SME"');
        $post9->addTranslation(new PostTranslation('uk','content','Представники громадської організації взяли активну участь у міжнародній конференції:
"IEEE International Scientific-Practical Conference «Problems of Infocommunications. Science and Technology", 4 – 6 October, 2016, Kharkiv.
Була зроблена доповідь:
"The application SAP® ERP principles for the development and implementation of corporate integrated information system for SME"'));
        $manager->persist($post9);

        $post10 = new Post();
        $post10->setTitle('IEEE International Scientific-Practical Conference "Problems of Infocommunications. Science and Technology", 10 – 13 October, 2017, Kharkiv');
        $post10->addTranslation(new PostTranslation('uk','title','Представники громадської організації взяли активну участь у міжнародній конференції:
        "IEEE International Scientific-Practical Conference "Problems of Infocommunications. Science and Technology", 10 – 13 October, 2017, Kharkiv.'));
        $post10->setSlug('int-conference-10-13-10-2017');
        $post10->setContent('Members of public organization actively participated in the international conference:
IEEE International Scientific-Practical Conference "Problems of Infocommunications. Science and Technology", 10 – 13 October, 2017, Kharkiv.
A presentation was made:
"Data sources for the complex use information ERP-system of corporate SME"');
        $post10->addTranslation(new PostTranslation('uk','content','Представники громадської організації взяли активну участь у міжнародній конференції:
        "IEEE International Scientific-Practical Conference "Problems of Infocommunications. Science and Technology", 10 – 13 October, 2017, Kharkiv.
        Була зроблена доповідь:
        "Data sources for the complex use information ERP-system of corporate SME"'));
        $manager->persist($post10);

        $manager->flush();
    }
}