<?php

namespace App\Repository;

use App\Entity\Sweet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Sweet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sweet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sweet[]    findAll()
 * @method Sweet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SweetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sweet::class);
    }

    // /**
    //  * @return Sweet[] Returns an array of Sweet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sweet
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
