<?php

namespace pi\FrontEnd\FicheDeSoinBundle\Repository;

/**
 * f_soinRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class f_soinRepository extends \Doctrine\ORM\EntityRepository
{
    public function deleteFicheDeSoin($id)
        {
            return $this->createQueryBuilder('f')
                ->update('FicheDeSoinBundle:f_soin','f')
                ->set('f.etat',0)
                ->where('f.id = ?1')
                ->setParameter(1,$id)
                ->getQuery()
                ->execute();
        }


}