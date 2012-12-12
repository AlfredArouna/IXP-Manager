<?php

namespace Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * TrafficDaily
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrafficDaily extends EntityRepository
{
    
    /**
     * Return an array of traffic data (joined with the customer record) for
     * a given day and category.
     *
     * For example:
     *
     *     array(55) {
     *        [0] => array(28) {
     *          ["day"] => object(DateTime)#286 (3) {
     *              ....
     *          }
     *          ["category"] => string(4) "bits"
     *          ["day_avg_in"] => string(8) "32732583"
     *          ...
     *          ["year_tot_out"] => string(16) "1430530473953106"
     *          ["id"] => string(6) "156931"
     *          ["Customer"] => array(31) {
     *            ["name"] => string(10) "A Name"
     *            ["type"] => int(1)
     *            ...
     *            ["id"] => int(4)
     *          }
     *        }
     *        [1] => array(28) {
     *          ["day"] => object(DateTime)#292 (3) {
     *              ...
     *          }
     *          ["category"] => string(4) "bits"
     *          ...
     *        }
     *      }
     *
     *
     * @see \INEX_Mrtg::$CATEGORIES
     * @param \DateTime $day The day to load records for
     * @param string $category The category of records to load (one of \INEX_Mrtg::$CATEGORIES)
     * @return array An array of all switch objects
     */
    public function load( $day, $category )
    {
        return $this->getEntityManager()->createQuery(
                "SELECT td, c
                 FROM Entities\\TrafficDaily td
                 LEFT JOIN td.Customer c
                 WHERE td.day = ?1 AND td.category = ?2"
            )
            ->setParameter( 1, $day )
            ->setParameter( 2, $category )
            ->getArrayResult();
    }
    
    

    /**
     * Delete all entries for a given day
     *
     * @param string $day The day to delete all entries for
     * @return int The number of entries removed
     */
    public function deleteForDay( $day )
    {
        return $this->getEntityManager()->createQuery( "DELETE \\Entities\\TrafficDaily td WHERE td.day = ?1" )
            ->setParameter( 1, $day )
            ->execute();
    }
    
    
    /**
     * Get the given number of recent traffic stats for a given customer
     *
     * @param \Entities\Customer $customer The customer to get entries for
     * @param int $rows The number of entries for fetch
     * @param string $category The traffic category (bits, packets, etc)
     * @return array The entries found
     */
    public function getAsArray( $customer, $rows, $category )
    {
        return $this->getEntityManager()->createQuery(
                "SELECT td
                 FROM Entities\\TrafficDaily td
                 WHERE td.Customer = ?1 AND td.category = ?2
                 ORDER BY td.day DESC"
            )
            ->setParameter( 1, $customer )
            ->setParameter( 2, $category )
            ->setMaxResults( $rows )
            ->getArrayResult();
    }
    
    
}
