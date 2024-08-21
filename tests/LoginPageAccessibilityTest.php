<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginPageAccessibilityTest extends WebTestCase
{
    public function testLoginPageIsAccessible(): void
    {
        $client = static::createClient();
        $client->request('GET', '/login');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertTrue($statusCode >= 200 && $statusCode < 300, "La page de connexion n'est pas accessible. Statut de la réponse : $statusCode");
    }
}
