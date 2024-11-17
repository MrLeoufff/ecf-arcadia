<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminTest extends WebTestCase
{
    public function testAdmin(): void
    {
        $client = static::createClient();
        $client->request('GET', '/admin/user');

        $this->assertTrue($client->getResponse()->isRedirect());
    }
}
