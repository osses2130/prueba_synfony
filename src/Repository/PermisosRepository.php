<?php

namespace App\Repository;

use App\Entity\Permisos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Permisos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Permisos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Permisos[]    findAll()
 * @method Permisos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PermisosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Permisos::class);
    }

    // /**
    //  * @return Permisos[] Returns an array of Permisos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Permisos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
