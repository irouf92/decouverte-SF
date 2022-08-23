<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(): Response
    {

$bonjour = "Bienvenue dans cette inititiation à symfony !!!";

        return $this->render('default/index.html.twig', [
            'bonjour' => $bonjour,
        ]);
    }

    #[Route('/home', name:"default_home")]
    public function home(): Response
    {
        return new Response(
            '<html><body><h1>Réponse du serveur grace à l\'objet Reponse</h1></body></html>'
        );
    }

}//end class 
