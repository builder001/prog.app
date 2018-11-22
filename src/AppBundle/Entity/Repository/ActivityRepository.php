<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class ActivityRepository extends EntityRepository
{
    public function getLatestActivity()
    {
        $qb = $this->createQueryBuilder('a')
            ->select('a');
        return $qb->getQuery()->getResult();
    }
}
