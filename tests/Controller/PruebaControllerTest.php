<?php

//php .\vendor\bin\phpunit

namespace App\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PruebaControllerTest extends WebTestCase
{
    public function testPrueba(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/prueba');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('body', 'Esto es una prueba');
        //$this->assertCount(0, $crawler->filter('body'));
        $client->clickLink('Pulsame');
        $this->assertSelectorTextContains('body', 'Este es el link');
        
        /*$this->assertCount(
            Paginator::class,
            $crawler->filter('article.post'),
            'The homepage displays the right number of posts.'
        );*/
    }
}
