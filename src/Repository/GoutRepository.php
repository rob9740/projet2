<?php

namespace App\Repository;

use App\Entity\Gout;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gout|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gout|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gout[]    findAll()
 * @method Gout[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gout::class);
    }

    // /**
    //  * @return Gout[] Returns an array of Gout objects
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
    public function findOneBySomeField($value): ?Gout
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
