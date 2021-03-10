<?php

namespace App\Controller;

use App\Entity\Mouvement;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MouvementController extends AbstractController
{
    /**
     * @Route("/api/mouvements", name="app_mouvements_all", methods={"GET"})
     */
    public function getAllMouvements(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $mouvements = $em->getRepository(Mouvement::class)->findAll();

        return $this->json($mouvements);
    }
}
