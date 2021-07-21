<?php

namespace App\Repository;

use App\Entity\RolesPermisos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RolesPermisos|null find($id, $lockMode = null, $lockVersion = null)
 * @method RolesPermisos|null findOneBy(array $criteria, array $orderBy = null)
 * @method RolesPermisos[]    findAll()
 * @method RolesPermisos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RolesPermisosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RolesPermisos::class);
    }

    // /**
    //  * @return RolesPermisos[] Returns an array of RolesPermisos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RolesPermisos
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
