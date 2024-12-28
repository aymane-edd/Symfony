<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    
    #[Route("/",name: "home")]
    public function index(RecipeRepository $rep): Response
    {
        $data=$rep->findById(2);
        return $this->render('home\index.html.twig',[
            'data' => $data
        ]);
    }
    #[Route("/recette/{id}",name: "show")]
    public function show(Request $request , string $id ): Response
    {
        return $this->render('home\show.html.twig',[
            'id' => $id
        ]);
    }
}
