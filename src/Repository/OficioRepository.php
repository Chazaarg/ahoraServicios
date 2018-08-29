<?php

namespace App\Repository;

use App\Entity\Oficio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Oficio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Oficio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Oficio[]    findAll()
 * @method Oficio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OficioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Oficio::class);
    }

//    /**
//     * @return Oficio[] Returns an array of Oficio objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Oficio
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
