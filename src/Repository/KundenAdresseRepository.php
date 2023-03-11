<?php

namespace App\Repository;

use App\Entity\KundenAdresse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KundenAdresse>
 *
 * @method KundenAdresse|null find($id, $lockMode = null, $lockVersion = null)
 * @method KundenAdresse|null findOneBy(array $criteria, array $orderBy = null)
 * @method KundenAdresse[]    findAll()
 * @method KundenAdresse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KundenAdresseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KundenAdresse::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(KundenAdresse $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(KundenAdresse $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return KundenAdresse[] Returns an array of KundenAdresse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?KundenAdresse
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
