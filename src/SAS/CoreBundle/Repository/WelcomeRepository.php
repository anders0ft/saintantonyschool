<?php

namespace SAS\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * WelcomeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WelcomeRepository extends EntityRepository
{
	public function findWelcome()
	{
		return $this->createQueryBuilder('w')
					->getQuery()
					->getResult();
	}
}