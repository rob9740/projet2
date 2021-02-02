<?php

namespace App\Repository;

use App\Entity\Goût;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Goût|null find($id, $lockMode = null, $lockVersion = null)
 * @method Goût|null findOneBy(array $criteria, array $orderBy = null)
 * @method Goût[]    findAll()
 * @method Goût[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoûtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Goût::class);
    }

    // /**
    //  * @return Goût[] Returns an array of Goût objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Goût
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
