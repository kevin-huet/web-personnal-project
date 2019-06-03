<?php

namespace App\Controller;

use App\Entity\CmsText;
use App\Repository\PropertyRepository;
use App\Form\CmsTextType;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @var ObjectManager
     */
    private $em;

    /**
     * @var UserRepository
     */
    private $userRepo;

    /**
     * @var PropertyRepository
     */
    private $repository;

    public function __construct(PropertyRepository $repository, UserRepository $userRepo, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->userRepo = $userRepo;
        $this->em = $em;
    }

    /**
     * @Route("/admin", name="admin")
     * @param UserRepository $userRepo
     * @return Response
     */
    public function admin(UserRepository $userRepo): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->render('admin/index.html.twig');
        }
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/list_user", name="admin.list_user")
     * @param UserRepository $userRepo
     * @return Response
     */
    public function admin_list_user(UserRepository $userRepo): Response
    {
        $securityContext = $this->container->get('security.authorization_checker');
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $user = $userRepo->findAllUser();

            return $this->render('admin/list_user.html.twig', [
                'user' => $user
            ]);
        }
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/admin/edit_text/{id}", name="admin.edit", methods="GET|POST")
     * @param CmsText $cms
     * @param Request $request
     * @return Response
     */
    public function edit(CmsText $cms, Request $request)
    {
        $form = $this->createForm(CmsTextType::class, $cms);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/edit_text.html.twig', [
            'property' => $cms,
            'form' => $form->createView()
        ]);
    }
}