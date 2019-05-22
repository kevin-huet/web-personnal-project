<?php

namespace App\Controller;

use App\Entity\Epihub;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use App\Form\RegisterFormType;
use App\Form\LoginFormType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'current_menu' => 'home'
        ]);
    }
    /**
     * @Route("/article", name="article")
     */
    public function article(): Response
    {
        //$repository = $this->getDoctrine()->getRepository(Property::class);
        //dump($repository);
        $property = $this->repository->findAllVisible();
        dump($property);
        $this->em->flush();
        return $this->render('pages/index.html.twig', [
            'current_menu' => 'home'
        ]);
    }

    /**
     * @Route("/admin/article/create", name="admin.new")
     */
    public function new()
    {
        $property = new Property();
        $property->setTitle('test')
            ->setAuthor('test')
            ->setDescription('blablabla');
        $em = $this->getDoctrine()->getManager();
        $em->persist($property);
        $em->flush();
    }

    /**
     * @Route("/profile", name="profile")
     * @return Response
     */
    public function profile(): Response
    {
        return $this->render('pages/profile.html.twig');
    }
    
    /**
     * @Route("/admin", name="admin")
     * @return Response
     */
    public function admin(): Response
    {
        return $this->render('admin.html.twig');
    }
}

?>