<?php

namespace App\Repository;

use App\Entity\Tafel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tafel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tafel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tafel[]    findAll()
 * @method Tafel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TafelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tafel::class);
    }

//    /**
//     * @return Tafel[] Returns an array of Tafel objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tafel
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
