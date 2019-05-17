<?php

namespace App\Controller;

use App\Entity\Epihub;
use App\Form\RegisterFormType;
use App\Form\LoginFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        //$login = $this->createForm(LoginFormType::class);
        //$register = $this->createForm(RegisterFormType::class);
        /*$epihub = new Epihub();
        $epihub->setTitle('guest')
            ->setUsername('name')
            ->setPassword('pass')
            ->setMail('mail');
        $em = $this->getDoctrine()->getManager();
        $em->persist($epihub);
        $em->flush();*/
        return $this->render('pages/index.html.twig', [
            'current_menu' => 'home'
            //'login' => $login->createView(),
            //'register' => $register->createView()
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
     * @Route("/admin", name="admin")
     * @return Response
     */
    public function admin(): Response
    {
        return $this->render('admin.html.twig');
    }
}

?>