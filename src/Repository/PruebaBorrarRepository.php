<?php

namespace App\Repository;

use App\Entity\PruebaBorrar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PruebaBorrar|null find($id, $lockMode = null, $lockVersion = null)
 * @method PruebaBorrar|null findOneBy(array $criteria, array $orderBy = null)
 * @method PruebaBorrar[]    findAll()
 * @method PruebaBorrar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PruebaBorrarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PruebaBorrar::class);
    }

    // /**
    //  * @return PruebaBorrar[] Returns an array of PruebaBorrar objects
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
    public function findOneBySomeField($value): ?PruebaBorrar
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
