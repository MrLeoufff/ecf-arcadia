<?php

namespace App\Repository;

use App\Entity\VeterinaryReport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class VeterinaryReportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VeterinaryReport::class);
    }

    public function findAllFoodOptions(): array
    {
        $qb = $this->createQueryBuilder('vr')
            ->select('DISTINCT vr.food')
            ->getQuery();

        $results = $qb->getResult();
        $foods = [];
        foreach ($results as $result) {
            $foods[$result['food']] = $result['food'];
        }

        return $foods;
    }

    public function findByDateRange($startDate, $endDate)
    {
        $qb = $this->createQueryBuilder('v');

        if ($startDate) {
            $qb->andWhere('v.report_date >= :startDate')
                ->setParameter('startDate', $startDate);
        }

        if ($endDate) {
            $qb->andWhere('v.report_date <= :endDate')
                ->setParameter('endDate', $endDate);
        }

        return $qb->orderBy('v.report_date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByCriteria(array $criteria)
    {
        $qb = $this->createQueryBuilder('r');

        if (isset($criteria['report_date']['gte'])) {
            $qb->andWhere('r.reportDate >= :startDate')
                ->setParameter('startDate', $criteria['report_date']['gte']);
        }
        if (isset($criteria['report_date']['lte'])) {
            $qb->andWhere('r.reportDate <= :endDate')
                ->setParameter('endDate', $criteria['report_date']['lte']);
        }
        if (isset($criteria['animal'])) {
            $qb->andWhere('r.animal = :animalId')
                ->setParameter('animalId', $criteria['animal']);
        }

        return $qb->getQuery()->getResult();
    }


//    /**
    //     * @return VeterinaryReport[] Returns an array of VeterinaryReport objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('v.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?VeterinaryReport
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
