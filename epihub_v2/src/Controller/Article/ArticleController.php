<?php
namespace App\Controller\Article;

use App\Entity\Property;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CmsTextRepository;
use App\Repository\PropertyRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PropertyType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class ArticleController
 * @package App\Controller
 * @Route("article/")
 */
class ArticleController extends AbstractController {

    private $repository;
    private $em;
    private $cms;
    private $name;
    private $articleRequest;

    public function __construct(PropertyRepository $repository, ArticleRequest $article, CmsTextRepository $cms, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->cms = $cms;
        $this->em = $em;
        $this->articleRequest = $article;
        $this->name = "EpiHub";
    }

    /**
     * @Route("/create", name="article.create")
     * @return Response
     */
    public function index()
    {
        $properties = $this->repository->findAll();
        return $this->render('pages/createArticle.html.twig', compact($properties));
    }

    /**
     * @Route("/edit/{id}", name="article.edit", methods="GET|POST")
     * @param Property $property
     * @param Request $request
     * @return Response
     */
    public function edit(Property $property, Request $request)
    {
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->articleRequest->editArticle($property);
            return $this->redirectToRoute('article');
        }
        return $this->render('pages/editArticle.html.twig', [
            'cms' => $this->name,
            'property' => $property,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("create/", name="article.create")
     * @param Security $security
     * @param Request $request
     * @return Response
     */
    public function new(Security $security, Request $request)
    {
        $property = new Property();
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);
        if (($form->isSubmitted() && $form->isValid())) {
            $this->articleRequest->createArticle($security, $property);
            return $this->redirectToRoute('article');
        }
        return $this->render('pages/createArticle.html.twig', [
            'cms' => $this->name,
            'property' => $property,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("delete/{id}", name="article.delete")
     * @param Property $property
     * @return RedirectResponse
     */
    public function delete(Property $property)
    {
        $this->articleRequest->deleteArticle($property);
        return $this->redirectToRoute('article');
    }
}
