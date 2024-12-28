<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TwinController extends AbstractController
{
    #[Route('/twin/{name}-{id}', name: 'twin.show',requirements: ['id' => '\d+' , 'name' => '[a-z]+'])]
    public function index(Request $request ,string $name , string $id): Response
    {
        dd($name,$id);
    }
}
