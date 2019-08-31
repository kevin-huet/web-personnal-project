<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\CmsTextRepository;
use App\Repository\PropertyRepository;
use App\Form\RegisterFormType;
use App\Form\LoginFormType;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $em;
    private $cms;
    private $userRepo;
    private $name;
    private $repository;

    public function __construct(PropertyRepository $repository, CmsTextRepository $cms, UserRepository $userRepo, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->userRepo = $userRepo;
        $this->cms = $cms;
        $this->em = $em;
        $name = $cms->findAllCms();
        if (!empty($name[0]))
            $this->name = $name[0]->getSiteName();
        else
            $this->name = "EpiHub";
    }

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'cms' => $this->name,
            'current_menu' => 'home']);
    }

    /**
     * @Route("/article", name="article")
     * @param PropertyRepository $repository
     * @return Response
     */
    public function article(PropertyRepository $repository): Response
    {
        $properties = $repository->findLatest();
        return $this->render('pages/article.html.twig', [
            'cms' => $this->name,
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
                'cms' => $this->name,
                'id' => $property->getId(),
                'slug' => $property->getSlug()
                ], 301);
        return $this->render('pages/show.html.twig', [
            'cms' => $this->name,
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
        return $this->render('pages/profile.html.twig', [
            'cms' => $this->name
        ]);
    }

    /**
     * @Route("/search", name="search", methods="POST|GET")
     * @param PropertyRepository $repository
     * @param Request $request
     * @return Response
     */
    public function search(PropertyRepository $repository, Request $request)
    {
        $properties = $repository->findLatest();
        dump($properties);
        $this->em->flush();
        $findProperties = array();
        $query = $request->request->get("query");
        if (!$query)
            return $this->render('pages/search.html.twig', [
                'cms' => $this->name,
                'properties' => $findProperties
            ]);
        foreach ($properties as $value) {
            if (strpos($value->getTitle(), $query) !== false) {
                array_push($findProperties, $value);
            }
        }
        unset($value);
        return $this->render('pages/search.html.twig', [
            'cms' => $this->name,
            'properties' => $findProperties
        ]);
    }
}

?>
