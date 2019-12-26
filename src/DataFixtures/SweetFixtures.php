<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Ingredient;
use App\Entity\Sweet;

class SweetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for($i=0 ; $i<3; $i++){
            $sweet = new Sweet();
            $sweet->setName($faker->word())
                  ->setImage($faker->imageUrl);
            
            for($j = 0; $j < 2; $j++){
                $ingredient = new Ingredient();
                $ingredient->setName($faker->word())
                           ->setSweet($sweet);

                $manager->persist($ingredient);

                $sweet->addIngredient($ingredient);
            }
            $manager->persist($sweet);
        }
        $manager->flush();
    }
}
