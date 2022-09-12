<?php

namespace App\Controller;

use App\Repository\EventsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventsController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/events', name: 'events')]
    public function event(): Response
    {
        return $this->render('events/index.html.twig', [
            'controller_name' => 'EventsController',
        ]);
    }

    #[Route('/events/{id}', name: 'events/show')]
    public function show(ManagerRegistry $doctrine, EventsRepository $repository)
    {
        $events = $repository->findAll();

        return $this->render('events/{id}', [
            'events' => $events,
        ]);
    }
}
