<?php
namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Post;
use Doctrine\ORM\EntityRepository;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;

class PostRepository extends EntityRepository
{

    public function queryLatest($limit = null)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            ->addOrderBy('p.id', 'DESC');

        if (false === is_null($limit))
            $qb->setMaxResults($limit);

        return $qb->getQuery()
            ->getResult();
    }

    /**
     * @param int $page
     * @return Pagerfanta
     */
    public function getLatestPost($page = 1)
    {
        $adapter = new ArrayAdapter($this->queryLatest());
        $paginator = new Pagerfanta($adapter);
        $paginator->setMaxPerPage(Post::NUM_ITEMS);
        $paginator->setCurrentPage($page);
        return $paginator;
    }
}