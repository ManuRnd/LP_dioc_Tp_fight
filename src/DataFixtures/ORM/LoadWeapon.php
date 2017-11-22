<?php
namespace App\DataFixtures\ORM;
/**
 * Created by PhpStorm.
 * User: manuel.renaudineau
 * Date: 22/11/17
 * Time: 09:20
 */
use \Doctrine\Common\Persistence\ObjectManager;
use \Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Arme;

class LoadWeapon extends Fixture
{

    public function load(ObjectManager $manager){
        $armes=[
            new arme('shotgun',100,5,3),
            new arme('sniper',100,0.3,5),
            new arme('m4',20,0.2,10),
            new arme('handgun',25,1,3),

        ];

        foreach ($armes as $arme){
            $this->addReference($arme->getName(),$arme);
            $manager->persist($arme);
            $manager->flush();
        }
    }
}