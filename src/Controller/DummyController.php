<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('dummy/info.html.twig', [
            'number' => $number,
        ]);
    }
}
{

}
