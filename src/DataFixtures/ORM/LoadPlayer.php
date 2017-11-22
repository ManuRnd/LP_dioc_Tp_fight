<?php
/**
 * Created by PhpStorm.
 * User: manuel.renaudineau
 * Date: 22/11/17
 * Time: 09:50
 */

namespace App\DataFixtures\ORM;

use App\Entity\Person;
use \Doctrine\Common\Persistence\ObjectManager;
use \Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\Arme;
use Faker\Factory;

class LoadPlayer extends Fixture
{

    public function load(ObjectManager $manager){
        $faker=Factory::create();
        $person=[
            $faker->name=>'shotgun',
            $faker->name=>'shotgun',
            $faker->name=>'sniper',
            $faker->name=>'m4',
            $faker->name=>'m4',
            $faker->name=>'m4',
            $faker->name=>'handgun',
            $faker->name=>'handgun',
        ];

        foreach ($person as $name=>$armes){
            $person=new Person();
            $person->setName($name);
            $person->setArmeCourante($this->getReference($armes));
            $manager->persist($person);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [LoadWeapon::class];
    }

}