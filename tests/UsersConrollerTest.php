<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UsersControllerTest extends WebTestCase
{
    public function testGetUsers()
    {
        $clients = static::createClient();
        $clients->request('GET', '/users');

        $response = $clients->getResponse();
        $content = $response->getContent();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($content);

        $arrayContent = json_decode($content, true);
        $this->assertCount(10, $arrayContent);
    }
}