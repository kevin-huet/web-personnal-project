<?php

namespace App\Repository;

use App\Entity\Epihub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Epihub|null find($id, $lockMode = null, $lockVersion = null)
 * @method Epihub|null findOneBy(array $criteria, array $orderBy = null)
 * @method Epihub[]    findAll()
 * @method Epihub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EpihubRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Epihub::class);
    }

    // /**
    //  * @return Epihub[] Returns an array of Epihub objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Epihub
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
