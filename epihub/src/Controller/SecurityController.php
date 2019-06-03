<?php

// src/Controller/SecurityController.php
namespace App\Controller;

use App\Repository\CmsTextRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    public function __construct(CmsTextRepository $cms)
    {
        $this->name = $cms->findAllCms()[0]->getSiteName();
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'cms' => $this->name,
            'last_username' => $lastUsername,
            'error' => $error,
            'current_menu' => 'connexion'
        ]);
    }
}
