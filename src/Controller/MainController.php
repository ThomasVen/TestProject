<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route(path:'/', name:"homepage")]
    public function homepage(): Response
    {
        $starshipCount = 457;
        $carsCount = 2224;

        $myShips = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'UNDER CONSTRUCTION',
        ];


        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'numberOfCars' => $carsCount,
            'myShip' => $myShips
        ]);

    }
}
