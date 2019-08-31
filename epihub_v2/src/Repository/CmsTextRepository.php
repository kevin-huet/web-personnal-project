<?php

namespace App\Repository;

use App\Entity\CmsText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CmsText|null find($id, $lockMode = null, $lockVersion = null)
 * @method CmsText|null findOneBy(array $criteria, array $orderBy = null)
 * @method CmsText[]    findAll()
 * @method CmsText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CmsTextRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CmsText::class);
    }

    /**
     * @return CmsText[]
     */
    public function findAllCms(): array
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return CmsText[] Returns an array of CmsText objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CmsText
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
