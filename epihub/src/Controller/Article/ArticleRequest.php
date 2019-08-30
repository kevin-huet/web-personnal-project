<?php


namespace App\Controller\Article;


use App\Entity\Property;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Security;

class ArticleRequest
{
    private $em;

    public function __construct(ObjectManager $em)
    {
        $this->em = $em;
    }

    public function createArticle(Security $security, Property $article)
    {
        $article->setAuthor($security->getUser()->getUsername());
        $this->em->persist($article);
        $this->em->flush();
    }

    public function editArticle(Property $article)
    {
        $this->em->persist($article);
        $this->em->flush();
    }

    public function deleteArticle(Property $article)
    {
        $this->em->remove($article);
        $this->em->flush();
    }
}