<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GreetingController
{
    #[Route('/greet/{name}')]
    public function greet(string $name): Response
    {
        $greet = "Hello {$name} nice to meet you !";

        return new Response(
            '<html><body><h1> ' . $greet . '</h1></body></html>'
        );
    }
}
