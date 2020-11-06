<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VesoulEditionController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home(Request $request)
    {
        /*
        if($this->session->get('panier')) {
            $panier = $this->session->get('panier');
        } else {
            $this->session->set('panier', []);
        }

        $allBooks = $this->repoBook->findAllBooksByAscName();
        $genras = $this->repoGenra->findAll();
        $authors = $this->repoAuthor->findAllAuthors();
        $maxAndMinYear = $this->repoBook->maxAndMinYear();
        $minYear = $maxAndMinYear[0]['minyear'];
        $maxYear = $maxAndMinYear[0]['maxyear'];
        */
        return $this->render('vesoul-edition/home.html.twig', [
            /*
            'genras' => $genras,
            'authors' => $authors,
            'minyear' => $minYear,
            'maxyear' => $maxYear
            */
        ]);
    }
}