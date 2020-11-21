<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use App\Entity\Article;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i= 0; $i < 10; ++$i){

            $Article = new Article();
            $Article->setTitle($faker->name);
            $Article->setDescription($faker->text);
            $Article->setImageFilename($faker->imageUrl());
            $Article->setMarque($faker->name);
            $Article->setPrice($faker->numberBetween(1, 20));
            $Article->setVolume($faker->numberBetween(1, 20));
            $Article->setDegre($faker->numberBetween(1, 20));

            $manager->persist($Article);
        }

        $manager->flush();
    }
}
