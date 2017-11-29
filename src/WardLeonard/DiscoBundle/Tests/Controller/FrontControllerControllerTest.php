<?php

namespace WardLeonard\DiscoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerControllerTest extends WebTestCase
{
    public function testListe()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/liste');
    }

    public function testUnique()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/liste/unique');
    }

    public function testParoles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/liste/paroles');
    }

}
