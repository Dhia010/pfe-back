<?php

namespace App\Controller;

use App\Entity\Stock;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class StockController extends AbstractController
{
    /**
     * @Route("/api/stocks", name="app_stock_all", methods={"GET"})
     */
    public function getAllStocks(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $stocks = $em->getRepository(Stock::class)->findAll();

        return $this->json($stocks);
    }
}
