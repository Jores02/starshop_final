<?php

namespace App\Controller;
use App\Model\Starship;
use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'api_starships')]
public function getCollection(StarshipRepository $repository): JsonResponse
{
    $starships = $repository->findAll();
    return $this->json($starships);
}
}
