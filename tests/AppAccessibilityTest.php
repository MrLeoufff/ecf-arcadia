<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AppAccessibilityTest extends WebTestCase
{
    public function testHomePageIsAccessible(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $statusCode = $client->getResponse()->getStatusCode();
        $this->assertTrue($statusCode >= 200 && $statusCode < 300, "La page d'accueil' n'est pas accessible. Statut de la réponse : $statusCode");
    }
}
