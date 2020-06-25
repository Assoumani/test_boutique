<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'fr/product/');
        $this->assertResponseIsSuccessful();
        $this->assertCount(12, $crawler->filter('div.div_product'));
    }
}
