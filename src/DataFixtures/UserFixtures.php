<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHashed;

    public function __construct(UserPasswordHasherInterface $passwordHashed)
    {
        $this->passwordHashed = $passwordHashed;
    }

    public function load(ObjectManager $manager): void
    {


        $userData = [
            ['email' => 'jose.hammond@gmail.com', 'password' => 'azerty', 'role' => ['ROLE_ADMIN']],
            ['email' => 'veterinaire.grant@gmail.com', 'password' => 'azerty', 'role' => ['ROLE_VETO']],
            ['email' => 'employe.nedry@gmail.com', 'password' => 'azerty', 'role' => ['ROLE_EMPLOYEE']],
        ];

        foreach ($userData as $UD) {
            $user = new User();
            $user->setEmail($UD['email']);
            $user->setRole($UD['role']);
            $user->setPassword($this->passwordHashed->hashPassword($user, $UD['password']));
            $manager->persist($user);
        }
        $manager->flush();
    }
}

