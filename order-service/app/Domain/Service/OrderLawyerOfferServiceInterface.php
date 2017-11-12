<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 11/12/17
 * Time: 7:47 PM
 */

namespace App\Domain\Service;

interface OrderLawyerOfferServiceInterface
{
    /**
     * @param $offer
     * @return mixed
     */
    public function createOrderServiceOffer($offer);

    /**
     * @return mixed
     */
    public function listOffers();

    /**
     * @param $orderId
     * @return mixed
     */
    public function listOfferByOrder($orderId);
}