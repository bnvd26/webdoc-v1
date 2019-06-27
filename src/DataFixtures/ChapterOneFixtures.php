<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\ChapterOne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ChapterOneFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("L'influence de la musique sur le cerveau");
        $chapterOne->setContent("À quel point la musique influence-t-elle nos vies ?");
        $chapterOne->setMusic('Pour une meilleure expérience, montez le son ou mettez votre casque');
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);
        
        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("1 - Qu'est ce que la musique ?");
        $chapterOne->setMusic('ljbsdv');
        $chapterOne->setContent("Le rythme");
        $chapterOne->setContent1('La hauteur');
        $chapterOne->setContent2('Les nuances');
        $chapterOne->setContent3('Le timbre');
        $chapterOne->setContent4("Le rythme détermine la durée entre les différents sons. 
        L'unité de mesure de cette durée musicale est le temps. 
        C'est une façon de compter l'espace entre chaque note.");
        $chapterOne->setContent5("Une nuance est un signe noté sur une partition qui indique l'intensité relative d'une note, d'une phrase, ou encore d'un passage entier d'une œuvre musicale. Les nuances permettent au musicien de restituer la dynamique de l'œuvre lors de son interprétation.");
        $chapterOne->setContent6("La hauteur d'un son pur correspond à sa fréquence de vibration, que l'on mesure en hertz (nombre de vibrations périodiques par seconde). Plus la vibration est rapide, plus le son est dit aigu ou haut ; plus la vibration est lente, plus le son est dit grave ou bas.");
        $chapterOne->setContent7("Le timbre désigne l'ensemble des caractéristiques sonores qui permettent d'identifier un instrument.");
        $chapterOne->setContent8("la musique est un art consistant à combiner sons et silences au cours du temps. Les ingrédients principaux sont le rythme, la hauteur, les nuances et le timbre.");
        $chapterOne->setImageBackground("http://localhost:8000/test2.mp3");
        $chapterOne->setFilename("/public/images/bla");
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);


        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("Le cerveau");
        $chapterOne->setContent("h");
        $chapterOne->setMusic("h");
        $chapterOne->setImageBackground("http://localhost:8000/test2.mp3");
        $chapterOne->setFilename("/public/images/bla");
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne=  new ChapterOne();
        $chapterOne->setTitle("2 - Votre cerveau réagit à la musique");
        $chapterOne->setContent("Par rapport aux composantes de la musique");
        $chapterOne->setContent1('HÉMISPHÈRE GAUCHE');
        $chapterOne->setContent2('HÉMISPHÈRE DROIT');
        $chapterOne->setContent3('Lobe frontal');
        $chapterOne->setContent4("Lobe pariétal");
        $chapterOne->setContent5("Lobe temporal");
        $chapterOne->setContent6("Cervelet");
        $chapterOne->setContent7("Les rythmes de la musique sont analysés par ces quatres parties de l’hémisphère gauche.");
        $chapterOne->setContent8("Air de Broca");
        $chapterOne->setContent9("L’air de Broca analyse les mélodies.");
        $chapterOne->setContent10("Air de Wernicke");
        $chapterOne->setContent11("L’air de Wernicke analyse la comparaison des hauteurs des notes.");
        $chapterOne->setContent12("Cortex auditif");
        $chapterOne->setContent13("Les mélodies et les structures musicales complexes sont analysées par le cortex auditif situé dans le lobe temporal.");
        $chapterOne->setContent14("le son n’est pas seulement traité par le cortex auditif,");
        $chapterOne->setContent15("situé dans le lobe temporal, mais par tout le cerveau.");
        $chapterOne->setContent16("Découvrez quelle partie de votre cerveau est activée");
        $chapterOne->setMusic("par les différentes composantes de la musique.");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("2 - Votre cerveau réagit à la musique");
        $chapterOne->setContent("Par rapport à différentes caractéristiques");
        $chapterOne->setContent1('écoute d’un son');
        $chapterOne->setContent2('écoute d’une musique');
        $chapterOne->setContent3('Cervelet');
        $chapterOne->setContent4("Tronc cérébral");
        $chapterOne->setContent5("Active le noyau cochléaire, le tronc cérébral et le cervelet.
        Puis l’information se déplace vers le cortex temporal où se trouve les aires auditives primaires et secondaires.");
        $chapterOne->setContent6("Air de Broca");
        $chapterOne->setContent7("Air de Wernicke");
        $chapterOne->setContent8("Cortex temporal");
        $chapterOne->setContent9("Ecouter et traiter les structures d’une musique impliquent des régions qui participent au langage, telles que les aires de Broca et de Wernicke, ainsi que d’autres régions du cortex temporal.");
        $chapterOne->setMusic("Les zones activées dépendent du type de son: un bruit ou une musique.");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("2 - Votre cerveau réagit à la musique");
        $chapterOne->setContent("Par rapport à différentes caractéristiques");
        $chapterOne->setContent1('Écoute d’une musique familière');
        $chapterOne->setContent2('Invention d’une musique');
        $chapterOne->setContent3('Cortex Frontal');
        $chapterOne->setContent4("Hippocampe");
        $chapterOne->setContent5("L’hippocampe et les aires du cortex frontal active des régions impliquées dans la mémoire.");
        $chapterOne->setContent6("Cortex Frontal");
        $chapterOne->setContent7("Cortex Temporal");
        $chapterOne->setContent8("En chantant par exemple, on met en jeu certaines régions situées dans les cortex frontal et temporal.");
        $chapterOne->setMusic("Ces Zones dépendent aussi du niveau de maîtrise du son : musique familère ou invention.");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("2 - Votre cerveau réagit à la musique");
        $chapterOne->setContent("Par rapport à différentes caractéristiques");
        $chapterOne->setContent1('Battre la musique');
        $chapterOne->setContent2('Les Emotions ressenties');
        $chapterOne->setContent3('Cortex moteur');
        $chapterOne->setContent4("Cortex frontal");
        $chapterOne->setContent5("Cervelet");
        $chapterOne->setContent6("Battre la mesure nécessite une synchronisation temporelle et implique le cervelet et les cortex moteur et frontal.");
        $chapterOne->setContent7("Cortex orbitofrontal");
        $chapterOne->setContent8("Amygdale cérébrale");
        $chapterOne->setContent9("Les émotions ressenties à l’écoute musicale activent les structures participant aux émotions comme l’amygdale cérébrale et le cortex orbitofrontal.");
        $chapterOne->setMusic("En stimulant certaines zones de votre cerveau, la musique est capable de vous faire réagir aussi bien physiquement qu’émotionnellement.");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("Les émotions");
        $chapterOne->setContent("h");
        $chapterOne->setMusic('h');
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("3 - Comment sont provoquées ces émotions ?");
        $chapterOne->setContent("Maintenant vous savez comment est traitée la musique par le cerveau. à présent voyons comment celle-ci arrive à influencer vos émotions.");
        $chapterOne->setMusic('h');
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);
        
        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("3 - Comment sont provoquées ces émotions ?");
        $chapterOne->setContent("Une expérience singulière face à la musique");
        $chapterOne->setMusic('Vos émotions ont une origine biochimique au niveau du cerveau, notamment Grâce à un neurotransmetteur appelé la dopamine, qui aura une influence singulière sur vous (propre à chaque individu).');
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("3 - Comment sont provoquées ces émotions ?");
        $chapterOne->setContent("La dopamine est un neurotransmetteur qui transmet l’information entre les neurones.");
        $chapterOne->setContent1("Lorsque le circuit de la récompense est activé, les neurones libèrent de la dopamine. celle-ci permet non seulement au cerveau  de procurer une sensation de plaisir immédiate, mais aussi de mémoriser les expériences agréables.");
        $chapterOne->setMusic('Lorsque la production ou la circulation de la dopamine est interrompue ou , la communication des cellules nerveuses ne se déroule pas comme prévu et cela peut entraîner la dépression.');
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("3 - Comment sont provoquées ces émotions ?");
        $chapterOne->setContent("La dopamine est donc un neurotransmetteur important pour la gestion des émotions selon sa concentration dans le cerveau. La quantité de dopamine produite et donc ses effets, varient d’une personne à une autre.");
        $chapterOne->setContent1("ainsi, la quantité de dopamine produite à l’écoute de musique influencent nos émotions de manière singulière.");
        $chapterOne->setMusic('mais alors en quoi sommes nous égaux dans certaines de nos réactions face à la musique ?');
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("Les réactions physiologiques");
        $chapterOne->setContent("h");
        $chapterOne->setMusic('h');
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("4 - Comment sont provoqués nos reactions ?");
        $chapterOne->setContent("Une expérience généralisée face à la musique");
        $chapterOne->setContent1("Le rythme est l’une des composantes les plus importantes dans notre réaction face à la musique. son influence a été testée aussi bien chez les foetus, les malades atteins de parkinson que dans la pratique du sport. C’est avec ce dernier exemple que nous allons vous montrer son impact sur notre comportement.");
        $chapterOne->setMusic("h");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("4 - Comment sont provoqués nos reactions ?");
        $chapterOne->setContent("Une expérience généralisée face à la musique");
        $chapterOne->setContent1("le rythme de la musique influence notre corps. En effet, celui-ci cause un effet de stimulation du système nerveux sympathique.");
        $chapterOne->setMusic("Ce système contrôle une grande partie des activités inconscientes du corps humain comme le rythme cardiaque ou la pression artérielle.");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("4 - Comment sont provoqués nos reactions ?");
        $chapterOne->setContent("Une expérience généralisée face à la musique");
        $chapterOne->setContent1("Rythme du coeur à l’écoute d’une musique lente");
        $chapterOne->setContent2("Rythme du coeur sans musique");
        $chapterOne->setMusic("Une musique avec un rythme plutôt lent a pour effets de ralentir le rythme cardiaque et diminuer la pression artérielle de façon proportionnelle et ainsi calme et apaise.");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $chapterOne = new ChapterOne();
        $chapterOne->setTitle("4 - Comment sont provoqués nos reactions ?");
        $chapterOne->setContent("Une expérience généralisée face à la musique");
        $chapterOne->setContent1("Rythme du coeur à l’écoute d’une musique rapide");
        $chapterOne->setContent2("Rythme du coeur sans musique");
        $chapterOne->setMusic("à l’inverse, une musique avec un rythme plutôt rapide a pour effets d’accélérer le rythme cardiaque et augmenter la pression artérielle de façon proportionnelle et ainsi provoque un etat de stress ou d’excitation.");
        $chapterOne->setImageBackground('http://localhost:8000/test2.mp3');
        $chapterOne->setFilename('/public/images/bla');
        $chapterOne->setUpdated((new \DateTime()));
        $manager->persist($chapterOne);

        $manager->flush();    

        
    }
    
}