<?php

namespace App\Repository;

use App\Entity\TipoUsuarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TipoUsuarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoUsuarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoUsuarios[]    findAll()
 * @method TipoUsuarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoUsuariosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoUsuarios::class);
    }

    // /**
    //  * @return TipoUsuarios[] Returns an array of TipoUsuarios objects
    //  */
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
    public function findOneBySomeField($value): ?TipoUsuarios
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
