<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testMapIsDisplayed(): void
    {
        $client = static::createClient();

        $client->request('GET', '/contact');

        $this->assertResponseIsSuccessful();

        $this->assertSelectorExists('#map');
    }
}
