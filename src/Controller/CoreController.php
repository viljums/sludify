<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PostRepository $postRepository) : Response
    {
        return $this->render('core/index.html.twig', ['newest_posts' => $postRepository->findBy([], ['id' => 'DESC'],8)
        ]);
    }
}
