<?php

namespace App\Controller;

use App\Entity\Joke;
use App\Form\JokeType;
use App\Repository\JokeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class JokeController extends AbstractController
{
    #[Route('/blagues', name: 'app_joke_index', methods: ['GET'])]
    public function showAll(JokeRepository $jokeRepository): Response
    {
        return $this->render('joke/show_all.html.twig', [
            'jokes' => $jokeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_joke_new', methods: ['GET', 'POST'])]
    public function newJoke(Request $request, EntityManagerInterface $entityManager): Response
    {
        $joke = new Joke();
        $form = $this->createForm(JokeType::class, $joke);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($joke);
            $entityManager->flush();

            return $this->redirectToRoute('app_joke_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('joke/new.html.twig', [
            'joke' => $joke,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_joke_show', methods: ['GET'])]
    public function show(Joke $joke): Response
    {
        return $this->render('joke/show.html.twig', [
            'joke' => $joke,
        ]);
    }

    #[Route('/api/random-joke', name:'api_random_joke', methods:['GET'])]
    public function getRandomJoke(JokeRepository $jokeRepository): JsonResponse
    {
        $randomJoke=$jokeRepository->findRandomJoke();

        if ($randomJoke) {
            return new JsonResponse([
                'joke' => $randomJoke->getContent(),
                'answer' => $randomJoke->getAnswer()
            ]);
        }

        return new JsonResponse(['error' => 'No joke found'], Response::HTTP_NOT_FOUND);
    }
    
    #[Route('/', name:'app_random_joke', methods:['GET'])]
    public function showRandomJokePage(): Response
    {
        return $this->render('joke/show_random.html.twig');
    }
    

    #[Route('/{id}/edit', name: 'app_joke_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Joke $joke, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JokeType::class, $joke);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_joke_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('joke/edit.html.twig', [
            'joke' => $joke,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_joke_delete', methods: ['POST'])]
    public function delete(Request $request, Joke $joke, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$joke->getId(), $request->request->get('_token'))) {
            $entityManager->remove($joke);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_joke_index', [], Response::HTTP_SEE_OTHER);
    }

  
}
