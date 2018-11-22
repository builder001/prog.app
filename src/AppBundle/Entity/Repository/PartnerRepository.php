<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class PartnerRepository extends EntityRepository
{
    public function getPartner($limit = null)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            ->addOrderBy('p.id','ASC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }
}
