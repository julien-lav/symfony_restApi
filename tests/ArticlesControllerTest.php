<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticlesControllerTest extends WebTestCase
{
	public function testGetArticles()
	{
		$clients = static::createClient();
		$clients->request('GET', '/api/articles');

		$response = $clients->getResponse();
		$content = $response->getContent();

		$this->assertEquals(200, $response->getStatusCode());
		$this->assertJson($content);

		$arrayContent = json_decode($content, true);
		$this->assertCount(10, $arrayContent);
	}

    public function testGetArticle()
    {
        $clients = static::createClient();


        $clients->request('GET', '/api/articles/1');

        $response = $clients->getResponse();
        $content = $response->getContent();

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertJson($content);
        $arrayContent = json_decode($content, true);
        $this->assertCount(count($arrayContent), $arrayContent);
        // Tester les clefs
    }

    /*
    public function testDeleteArticle()
    {
        $client = static::createClient();

        $client
            ->request(
                'GET',
                '/users/10',
                [],
                [],
                [
                    'HTTP_CONTENT_TYPE' => 'application/json',
                    'HTTP_AUTH-TOKEN' => '5b7d7ed487e487.18930027',
                ]
            );


        $client->request('DELETE', '/api/articles/2');

        /*$response = $clients->getResponse();
        $content = $response->getContent();

        $clients->request('GET', '/api/articles');

        $response = $clients->getResponse();
        $content = $response->getContent();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($content);

        $arrayContent = json_decode($content, true);
        $this->assertCount(10, $arrayContent);
    }*/
}