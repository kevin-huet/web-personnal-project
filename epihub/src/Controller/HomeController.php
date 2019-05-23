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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var ObjectManager
     */
    private $em;

    public function __construct(PropertyRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em = $em;
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
     * @param PropertyRepository $repository
     * @return Response
     */
    public function article(PropertyRepository $repository): Response
    {
        //$repository = $this->getDoctrine()->getRepository(Property::class);
        //dump($repository);
        //$property = $this->repository->findAllVisible();

        $properties = $repository->findLatest();
        dump($properties);
        $this->em->flush();
        return $this->render('pages/article.html.twig', [
            'properties' => $properties
        ]);
    }

    /**
     * @Route("/article/{slug}-{id}", name="article.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Property $property
     * @param string $slug
     * @return Response
     */
    public function show(Property $property, string $slug): Response
    {
        if ($property->getSlug() !== $slug)
            $this->redirectToRoute('article.show', [
                'id' => $property->getId(),
                'slug' => $property->getSlug()
                ], 301);
        return $this->render('pages/show.html.twig', [
            'property' => $property,
            'current_menu' => 'properties'
        ]);
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
     * @Route("/search/{query}", name="search", methods="POST|GET")
     * @param PropertyRepository $repository
     * @param string $query
     * @return Response
     */
    public function search(PropertyRepository $repository, string $query)
    {
        $properties = $repository->findLatest();
        dump($properties);
        $this->em->flush();
        $findProperties = array();
        foreach ($properties as $value) {
            if (strpos($value->getTitle(), $query) !== false) {
                array_push($findProperties, $value);
            }
        }
        unset($value);
        return $this->render('pages/search.html.twig', [
            'properties' => $findProperties
        ]);
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