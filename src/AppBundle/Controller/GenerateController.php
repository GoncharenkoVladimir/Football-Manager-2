<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Countries;
use AppBundle\Entity\Players;
use AppBundle\Entity\Trainers;
use AppBundle\Entity\Team;

class GenerateController extends Controller
{
    /**
     * @Route("/generate", name="generate")
     */
    public function generateAction()
    {
        $countries1 = new Countries();
        $countries1 -> setName('Украина');
        $countries1 -> setCapital('Киев');
        $countries1 -> setPopulation(46589048);

        $countries2 = new Countries();
        $countries2 -> setName('Албания');
        $countries2 -> setCapital('Тирана');
        $countries2 -> setPopulation(2744000);

        $countries3 = new Countries();
        $countries3 -> setName('Австрия');
        $countries3 -> setCapital('Вена');
        $countries3 -> setPopulation(8474000);

        $countries4 = new Countries();
        $countries4 -> setName('Бельгия');
        $countries4 -> setCapital('Брюсель');
        $countries4 -> setPopulation(11200000);

        $countries5 = new Countries();
        $countries5 -> setName('Хорватия');
        $countries5 -> setCapital('Загреб');
        $countries5 -> setPopulation(5124000);

        $countries6 = new Countries();
        $countries6 -> setName('Чехия');
        $countries6 -> setCapital('Прага');
        $countries6 -> setPopulation(10520000);

        $countries7 = new Countries();
        $countries7 -> setName('Англия');
        $countries7 -> setCapital('Лондон');
        $countries7 -> setPopulation(53100000);

        $countries8 = new Countries();
        $countries8 -> setName('Франция');
        $countries8 -> setCapital('Париж');
        $countries8 -> setPopulation(64700000);

        $countries9 = new Countries();
        $countries9 -> setName('Германи');
        $countries9 -> setCapital('Берлин');
        $countries9 -> setPopulation(80620000);

        $countries10 = new Countries();
        $countries10 -> setName('Венгрия');
        $countries10 -> setCapital('Будапешт');
        $countries10 -> setPopulation(9800000);

        $countries11 = new Countries();
        $countries11 -> setName('Исландия');
        $countries11 -> setCapital('Рейкьявик');
        $countries11 -> setPopulation(323002);

        $countries12 = new Countries();
        $countries12 -> setName('Италия');
        $countries12 -> setCapital('Рим');
        $countries12 -> setPopulation(5983000);

        $countries13 = new Countries();
        $countries13 -> setName('Северная Ирландия');
        $countries13 -> setCapital('Белфаст');
        $countries13 -> setPopulation(1811000);

        $countries14 = new Countries();
        $countries14 -> setName('Польша');
        $countries14 -> setCapital('Варшава');
        $countries14 -> setPopulation(38530000);

        $countries15 = new Countries();
        $countries15 -> setName('Португалия');
        $countries15 -> setCapital('Лиссабон');
        $countries15 -> setPopulation(10460000);

        $countries16 = new Countries();
        $countries16 -> setName('Ирландия');
        $countries16 -> setCapital('Дублин');
        $countries16 -> setPopulation(1400000);

        $countries17 = new Countries();
        $countries17 -> setName('Румыния');
        $countries17 -> setCapital('Бухарест');
        $countries17 -> setPopulation(19000000);

        $countries18 = new Countries();
        $countries18 -> setName('Россия');
        $countries18 -> setCapital('Москва');
        $countries18 -> setPopulation(143500000);

        $countries19 = new Countries();
        $countries19 -> setName('Словакия');
        $countries19 -> setCapital('Братислава');
        $countries19 -> setPopulation(5414000);

        $countries20 = new Countries();
        $countries20 -> setName('Испания');
        $countries20 -> setCapital('Мадрид');
        $countries20 -> setPopulation(47370000);

        $countries21 = new Countries();
        $countries21 -> setName('Швеция');
        $countries21 -> setCapital('Стокголм');
        $countries21 -> setPopulation(9723000);

        $countries22 = new Countries();
        $countries22 -> setName('Швейцария');
        $countries22 -> setCapital('Лихтенштейн');
        $countries22 -> setPopulation(8081000);

        $countries23 = new Countries();
        $countries23 -> setName('Турция');
        $countries23 -> setCapital('Анкара');
        $countries23 -> setPopulation(74930000);

        $countries24 = new Countries();
        $countries24 -> setName('Уэльс');
        $countries24 -> setCapital('Кардифф');
        $countries24 -> setPopulation(3064000);


        $players1 = new Players();
        $players1->setName("Name1");
        $players1->setAge(rand(24,46));
        $players1->setSecondName("SecondName1");
        $players1->setNumber(1);
        $players1->setPosition('forward');

        $players2 = new Players();
        $players2->setName("Name2");
        $players2->setAge(rand(24,46));
        $players2->setSecondName("SecondName2");
        $players2->setNumber(2);
        $players2->setPosition('forward');

        $players3 = new Players();
        $players3->setName("Name3");
        $players3->setAge(rand(24,46));
        $players3->setSecondName("SecondName3");
        $players3->setNumber(3);
        $players3->setPosition('forward');

        $players4 = new Players();
        $players4->setName("Name4");
        $players4->setAge(rand(24,46));
        $players4->setSecondName("SecondName4");
        $players4->setNumber(4);
        $players4->setPosition('forward');

        $players5 = new Players();
        $players5->setName("Name5");
        $players5->setAge(rand(24,46));
        $players5->setSecondName("SecondName5");
        $players5->setNumber(5);
        $players5->setPosition('forward');

        $players6 = new Players();
        $players6->setName("Name6");
        $players6->setAge(rand(24,46));
        $players6->setSecondName("SecondName6");
        $players6->setNumber(6);
        $players6->setPosition('forward');

        $players7 = new Players();
        $players7->setName("Name7");
        $players7->setAge(rand(24,46));
        $players7->setSecondName("SecondName7");
        $players7->setNumber(7);
        $players7->setPosition('forward');

        $players8 = new Players();
        $players8->setName("Name8");
        $players8->setAge(rand(24,46));
        $players8->setSecondName("SecondName8");
        $players8->setNumber(8);
        $players8->setPosition('forward');

        $players9 = new Players();
        $players9->setName("Name9");
        $players9->setAge(rand(24,46));
        $players9->setSecondName("SecondName9");
        $players9->setNumber(9);
        $players9->setPosition('forward');

        $players10 = new Players();
        $players10->setName("Name10");
        $players10->setAge(rand(24,46));
        $players10->setSecondName("SecondName10");
        $players10->setNumber(10);
        $players10->setPosition('forward');

        $players11 = new Players();
        $players11->setName("Name11");
        $players11->setAge(rand(24,46));
        $players11->setSecondName("SecondName11");
        $players11->setNumber(11);
        $players11->setPosition('forward');

        $players12 = new Players();
        $players12->setName("Name12");
        $players12->setAge(rand(24,46));
        $players12->setSecondName("SecondName12");
        $players12->setNumber(12);
        $players12->setPosition('forward');

        $players13 = new Players();
        $players13->setName("Name13");
        $players13->setAge(rand(24,46));
        $players13->setSecondName("SecondName13");
        $players13->setNumber(13);
        $players13->setPosition('forward');

        $players14= new Players();
        $players14->setName("Name14");
        $players14->setAge(rand(24,46));
        $players14->setSecondName("SecondName14");
        $players14->setNumber(14);
        $players14->setPosition('forward');

        $players15 = new Players();
        $players15->setName("Name15");
        $players15->setAge(rand(24,46));
        $players15->setSecondName("SecondName15");
        $players15->setNumber(15);
        $players15->setPosition('forward');

        $players16 = new Players();
        $players16->setName("Name16");
        $players16->setAge(rand(24,46));
        $players16->setSecondName("SecondName16");
        $players16->setNumber(16);
        $players16->setPosition('forward');

        $players17 = new Players();
        $players17->setName("Name17");
        $players17->setAge(rand(24,46));
        $players17->setSecondName("SecondName17");
        $players17->setNumber(17);
        $players17->setPosition('forward');

        $players18 = new Players();
        $players18->setName("Name18");
        $players18->setAge(rand(24,46));
        $players18->setSecondName("SecondName18");
        $players18->setNumber(18);
        $players18->setPosition('forward');

        $players19 = new Players();
        $players19->setName("Name19");
        $players19->setAge(rand(24,46));
        $players19->setSecondName("SecondName19");
        $players19->setNumber(19);
        $players19->setPosition('forward');

        $players20 = new Players();
        $players20->setName("Name20");
        $players20->setAge(rand(24,46));
        $players20->setSecondName("SecondName20");
        $players20->setNumber(20);
        $players20->setPosition('forward');

        $players21 = new Players();
        $players21->setName("Name21");
        $players21->setAge(rand(24,46));
        $players21->setSecondName("SecondName21");
        $players21->setNumber(21);
        $players21->setPosition('forward');

        $players22 = new Players();
        $players22->setName("Name22");
        $players22->setAge(rand(24,46));
        $players22->setSecondName("SecondName22");
        $players22->setNumber(22);
        $players22->setPosition('forward');

        $players23 = new Players();
        $players23->setName("Name23");
        $players23->setAge(rand(24,46));
        $players23->setSecondName("SecondName23");
        $players23->setNumber(23);
        $players23->setPosition('forward');

        $players24 = new Players();
        $players24->setName("Name24");
        $players24->setAge(rand(24,46));
        $players24->setSecondName("SecondName24");
        $players24->setNumber(24);
        $players24->setPosition('forward');

        $trainers1 = new Trainers();
        $trainers1->setName("Name1");
        $trainers1->setAge(rand(24,46));
        $trainers1->setSecondName("SecondName1");

        $trainers2 = new Trainers();
        $trainers2->setName("Name2");
        $trainers2->setAge(rand(24,46));
        $trainers2->setSecondName("SecondName2");

        $trainers3 = new Trainers();
        $trainers3->setName("Name3");
        $trainers3->setAge(rand(24,46));
        $trainers3->setSecondName("SecondName3");

        $trainers4 = new Trainers();
        $trainers4->setName("Name4");
        $trainers4->setAge(rand(24,46));
        $trainers4->setSecondName("SecondName4");

        $trainers5 = new Trainers();
        $trainers5->setName("Name5");
        $trainers5->setAge(rand(24,46));
        $trainers5->setSecondName("SecondName5");

        $trainers6 = new Trainers();
        $trainers6->setName("Name6");
        $trainers6->setAge(rand(24,46));
        $trainers6->setSecondName("SecondName6");

        $trainers7 = new Trainers();
        $trainers7->setName("Name7");
        $trainers7->setAge(rand(24,46));
        $trainers7->setSecondName("SecondName7");

        $trainers8 = new Trainers();
        $trainers8->setName("Name8");
        $trainers8->setAge(rand(24,46));
        $trainers8->setSecondName("SecondName8");

        $trainers9 = new Trainers();
        $trainers9->setName("Name9");
        $trainers9->setAge(rand(24,46));
        $trainers9->setSecondName("SecondName9");

        $trainers10 = new Trainers();
        $trainers10->setName("Name10");
        $trainers10->setAge(rand(24,46));
        $trainers10->setSecondName("SecondName10");

        $trainers11 = new Trainers();
        $trainers11->setName("Name11");
        $trainers11->setAge(rand(24,46));
        $trainers11->setSecondName("SecondName11");

        $trainers12 = new Trainers();
        $trainers12->setName("Name12");
        $trainers12->setAge(rand(24,46));
        $trainers12->setSecondName("SecondName12");

        $trainers13 = new Trainers();
        $trainers13->setName("Name13");
        $trainers13->setAge(rand(24,46));
        $trainers13->setSecondName("SecondName13");

        $trainers14= new Trainers();
        $trainers14->setName("Name14");
        $trainers14->setAge(rand(24,46));
        $trainers14->setSecondName("SecondName14");

        $trainers15 = new Trainers();
        $trainers15->setName("Name15");
        $trainers15->setAge(rand(24,46));
        $trainers15->setSecondName("SecondName15");

        $trainers16 = new Trainers();
        $trainers16->setName("Name16");
        $trainers16->setAge(rand(24,46));
        $trainers16->setSecondName("SecondName16");

        $trainers17 = new Trainers();
        $trainers17->setName("Name17");
        $trainers17->setAge(rand(24,46));
        $trainers17->setSecondName("SecondName17");

        $trainers18 = new Trainers();
        $trainers18->setName("Name18");
        $trainers18->setAge(rand(24,46));
        $trainers18->setSecondName("SecondName18");

        $trainers19 = new Trainers();
        $trainers19->setName("Name19");
        $trainers19->setAge(rand(24,46));
        $trainers19->setSecondName("SecondName19");

        $trainers20 = new Trainers();
        $trainers20->setName("Name20");
        $trainers20->setAge(rand(24,46));
        $trainers20->setSecondName("SecondName20");

        $trainers21 = new Trainers();
        $trainers21->setName("Name21");
        $trainers21->setAge(rand(24,46));
        $trainers21->setSecondName("SecondName21");

        $trainers22 = new Trainers();
        $trainers22->setName("Name22");
        $trainers22->setAge(rand(24,46));
        $trainers22->setSecondName("SecondName22");

        $trainers23 = new Trainers();
        $trainers23->setName("Name23");
        $trainers23->setAge(rand(24,46));
        $trainers23->setSecondName("SecondName23");

        $trainers24 = new Trainers();
        $trainers24->setName("Name24");
        $trainers24->setAge(rand(24,46));
        $trainers24->setSecondName("SecondName24");
        
        $team1 = new Team();
        $team1->setCountry($countries1);
        $team1->addPlayer($players1);
        $team1->setTrainer($trainers1);

        $team2 = new Team();
        $team2->setCountry($countries2);
        $team2->addPlayer($players2);
        $team2->setTrainer($trainers2);

        $team3 = new Team();
        $team3->setCountry($countries3);
        $team3->addPlayer($players3);
        $team3->setTrainer($trainers3);

        $team4 = new Team();
        $team4->setCountry($countries4);
        $team4->addPlayer($players4);
        $team4->setTrainer($trainers4);

        $team5 = new Team();
        $team5->setCountry($countries5);
        $team5->addPlayer($players5);
        $team5->setTrainer($trainers5);

        $team6 = new Team();
        $team6->setCountry($countries6);
        $team6->addPlayer($players6);
        $team6->setTrainer($trainers6);

        $team7 = new Team();
        $team7->setCountry($countries7);
        $team7->addPlayer($players7);
        $team7->setTrainer($trainers7);

        $team8 = new Team();
        $team8->setCountry($countries8);
        $team8->addPlayer($players8);
        $team8->setTrainer($trainers8);

        $team9 = new Team();
        $team9->setCountry($countries9);
        $team9->addPlayer($players9);
        $team9->setTrainer($trainers9);

        $team10 = new Team();
        $team10->setCountry($countries10);
        $team10->addPlayer($players10);
        $team10->setTrainer($trainers10);

        $team11 = new Team();
        $team11->setCountry($countries11);
        $team11->addPlayer($players11);
        $team11->setTrainer($trainers11);

        $team12 = new Team();
        $team12->setCountry($countries12);
        $team12->addPlayer($players12);
        $team12->setTrainer($trainers12);

        $team13 = new Team();
        $team13->setCountry($countries13);
        $team13->addPlayer($players13);
        $team13->setTrainer($trainers13);

        $team14 = new Team();
        $team14->setCountry($countries14);
        $team14->addPlayer($players14);
        $team14->setTrainer($trainers14);

        $team15 = new Team();
        $team15->setCountry($countries15);
        $team15->addPlayer($players15);
        $team15->setTrainer($trainers15);

        $team16 = new Team();
        $team16->setCountry($countries16);
        $team16->addPlayer($players16);
        $team16->setTrainer($trainers16);

        $team17 = new Team();
        $team17->setCountry($countries17);
        $team17->addPlayer($players17);
        $team17->setTrainer($trainers17);

        $team18 = new Team();
        $team18->setCountry($countries18);
        $team18->addPlayer($players18);
        $team18->setTrainer($trainers18);

        $team19 = new Team();
        $team19->setCountry($countries19);
        $team19->addPlayer($players19);
        $team19->setTrainer($trainers19);

        $team20 = new Team();
        $team20->setCountry($countries20);
        $team20->addPlayer($players20);
        $team20->setTrainer($trainers20);

        $team21 = new Team();
        $team21->setCountry($countries21);
        $team21->addPlayer($players21);
        $team21->setTrainer($trainers21);

        $team22 = new Team();
        $team22->setCountry($countries22);
        $team22->addPlayer($players22);
        $team22->setTrainer($trainers22);

        $team23 = new Team();
        $team23->setCountry($countries23);
        $team23->addPlayer($players23);
        $team23->setTrainer($trainers23);

        $team24 = new Team();
        $team24->setCountry($countries24);
        $team24->addPlayer($players24);
        $team24->setTrainer($trainers24);
        

        $em = $this->getDoctrine()->getManager();


        for ($i = 1; $i<=24; $i++) {
            $em->persist(${"countries$i"});
            $em->persist(${"team$i"});
            $em->persist(${"trainers$i"});
            $em->persist(${"players$i"});
        }

        $em->flush();
        return [];
    }
}
