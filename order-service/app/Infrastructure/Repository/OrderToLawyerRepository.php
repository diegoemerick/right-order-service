<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 11/12/17
 * Time: 7:14 PM
 */

namespace App\Infrastructure\Repository;


use App\Domain\Repository\OrderToLawyerRepositoryInterface;
use App\OrderServiceToLawyer;

class OrderToLawyerRepository implements OrderToLawyerRepositoryInterface
{
    public function createOrderToLawyerOffer($offer)
    {
        return OrderServiceToLawyer::create($offer);
    }

    public function listOffers()
    {
        return OrderServiceToLawyer::orderBy('id', 'desc');
    }

    public function listOffersByOrder($orderId)
    {
        return OrderServiceToLawyer::where('order_id', $orderId)->get();
    }
}