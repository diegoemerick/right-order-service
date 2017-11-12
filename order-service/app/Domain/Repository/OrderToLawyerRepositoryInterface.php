<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:03
 */

namespace App\Domain\Repository;

interface OrderToLawyerRepositoryInterface
{
    /**
     * @param $offer
     * @return mixed
     */
    public function createOrderToLawyerOffer($offer);

    public function listOffers();

    public function listOffersByOrder($orderId);
}