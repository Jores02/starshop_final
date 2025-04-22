<?php

namespace App\Controller;
use App\Repository\StarshipRepository;
use Symfony\Component\HttpFoundation\Response;
use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/starships', name: 'api_starships_')]
class StarshipApiController extends AbstractController
{
    #[Route('', name: 'list', methods: ['GET'])]
    public function getCollection(StarshipRepository $repository): JsonResponse
    {
        $starships = $repository->findAll();
        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', name: 'show', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        $starship = $repository->find($id);

        if (!$starship) {
            throw $this->createNotFoundException('Vaisseau non trouvé');
        }

        return $this->json($starship);
    }
}