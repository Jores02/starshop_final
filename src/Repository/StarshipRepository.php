<?php

namespace App\Repository;
use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger) {}

    public function findAll(): array
    {
        $this->logger->info('collection de vaisseaux spatiaux récupérée');

        return [
            new Starship(1, 'Millennium Falcon', 'Light Freighter', 'Han Solo', 'Active'),
            new Starship(2, 'Enterprise', 'Explorer', 'Jean-Luc Picard', 'Active'),
            new Starship(3, 'Serenity', 'Firefly', 'Malcolm Reynolds', 'Retired'),
        ];
    }
}
