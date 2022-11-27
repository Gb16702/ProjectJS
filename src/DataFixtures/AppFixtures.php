<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        /**
         * Init de Faker
         */
        $faker = Factory::create('fr_FR');

        $admin = new User();

        $hash = $this ->hasher -> hashPassword($admin, 'g/pAN16702');
        $createAt = $faker->dateTimeBetween('-6 months', "-4 months");
        $createdAt = new DateTimeImmutable($createAt->format('Y-m-d'));

        $admin -> setUsername('Geoffrey')
        -> setEmail('delgeoffrey1@gmail.com')
        ->setPassword($hash)
        ->setRoles(['ROLE_ADMIN'])
        ->setCreatedAt($createdAt);

        $manager -> persist($admin);

        $user = new User();
        $hash = $this ->hasher -> hashPassword($user, 'Test');
        $createAt = $faker->dateTimeBetween('-6 months', "-4 months");
        $createdAt = new DateTimeImmutable($createAt->format('Y-m-d'));
        $user -> setUsername('Test')
        ->setEmail('test@gmail.com')
        ->setPassword($hash)
        ->setCreatedAt($createdAt);
        $manager -> persist($user);

        $manager->flush();
    }
}
