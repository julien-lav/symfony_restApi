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



        $clients->request('GET', '/api/articles/60');

        $response = $clients->getResponse();
        $content = $response->getContent();

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertJson($content);
        $arrayContent = json_decode($content, true);
        $this->assertCount(3, $arrayContent);
    }
}