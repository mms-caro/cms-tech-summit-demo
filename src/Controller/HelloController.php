<?php

namespace App\Controller; 

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
	/**
    * @Route("/")
    */
    public function home()
    {
        return new Response('it works');
    }

    /**
    * @Route("/hello/{name}")
    */
    public function hello($name)
    {
        return new Response('Hello '.$name);
    }
}