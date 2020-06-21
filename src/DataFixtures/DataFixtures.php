<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DataFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 12; $i++) {
            $product = new Product();
            $product->setName($faker->company);
            $product->setDescription($faker->realText(100, 2));
            $product->setPrice($faker->randomFloat(2, 8, 950));
            $manager->persist($product);
        }
        $manager->flush();
    }
}
