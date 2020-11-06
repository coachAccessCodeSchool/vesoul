<?php


namespace App\Controller;


use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VesoulEditionController extends AbstractController
{

    private BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('vesoul-edition/home.html.twig', [
            'books' => $this->bookRepository->findAll()
        ]);
    }
}