<?php


namespace App\Controller\Admin;


use App\Entity\Book;
use App\Form\Admin\CreateBookType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/create", name="admin_create_book")
     */
    public function create(Request $request): Response
    {
        $book = new Book();
        $form = $this->createForm(CreateBookType::class, $book);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($book);
            $this->entityManager->flush();
            $this->addFlash('success', 'OK');
            return $this->redirectToRoute('admin_create_book');
        }
        return $this->render('admin/create.html.twig', [
            'form' => $form->createView()
        ]);
    }
}