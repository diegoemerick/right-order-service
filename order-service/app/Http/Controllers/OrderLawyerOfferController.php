<?php

namespace App\Http\Controllers;

use App\Application\Service\OrderLawyerOfferService;
use Illuminate\Http\Request;

class OrderLawyerOfferController extends Controller
{
    private $orderOfferService;

    public function __construct
    (
        OrderLawyerOfferService $orderLawyerOfferService
    )
    {
        $this->orderOfferService = $orderLawyerOfferService;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function createOrderOffer(Request $request)
    {
        return $this->orderOfferService->createOrderServiceOffer($request->get('form'));
    }

    /**
     * @param $orderId
     * @return mixed
     */
    public function listOffersByOrder($orderId)
    {
        return $this->orderOfferService->listOfferByOrder($orderId);
    }

    /**
     * @return mixed
     */
    public function listOffers()
    {
        return $this->orderOfferService->listOffers();
    }
}
