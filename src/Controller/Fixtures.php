<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Fixtures extends AbstractController
{

    private BookRepository $bookRepository;
    private EntityManagerInterface $entityManager;
    private CategoryRepository $categoryRepository;

    public function __construct(BookRepository $bookRepository,
                                EntityManagerInterface $entityManager,
                                CategoryRepository $categoryRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->entityManager = $entityManager;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @Route("/fixtures")
     */
    public function fixtures()
    {
        for ($i = 0; $i < 30; $i++){
            $book = (new Book())
                ->addCategory($this->categoryRepository->find(mt_rand(1, 5)))
                ->setTitle('book ' . $i)
                ->setPrice(mt_rand(20, 100))
                ->setAvailable(true)
                ->setHeight(12)
                ->setWidth(12)
                ->setNew(true)
                ->setIsbn("TA MEEERRRRRRR")
                ->setStock(999)
                ->setPage(88888)
                ->setDescription("Lorem Ipsum is simply dummy text of the printing and typesetting industry.")
            ;
            $this->entityManager->persist($book);
            $this->entityManager->flush();
        }
        return new Response("ok");
    }
}