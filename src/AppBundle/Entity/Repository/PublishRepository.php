<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class PublishRepository extends EntityRepository
{
    public function getLatestPub($limit = null)
    {
        $qb = $this->createQueryBuilder('p')
              ->select('p')
              ->addOrderBy('p.id','DESC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }
}
