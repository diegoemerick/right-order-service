<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 11/12/17
 * Time: 7:22 PM
 */

namespace App\Application\Service;


use App\Application\ServiceOrderService;
use App\Domain\Service\OrderLawyerOfferServiceInterface;
use App\Infrastructure\Repository\OrderToLawyerRepository;
use App\Infrastructure\Service\LawyerService;

class OrderLawyerOfferService implements OrderLawyerOfferServiceInterface
{
    private $repository;
    private $lawyerService;
    private $orderService;

    public function __construct(
        OrderToLawyerRepository $repository,
        LawyerService $lawyerService,
        ServiceOrderService $orderService
    )
    {
        $this->repository = $repository;
        $this->lawyerService = $lawyerService;
        $this->orderService = $orderService;
    }

    public function createOrderServiceOffer($offer)
    {
        if (! $offer['lawyer_id']) {
            throw new \Exception('Lawyer not send');
        }

        $this->getLawyer($offer['lawyer_id']);
        $this->getOrder($offer['order_id']);

        return $this->repository->createOrderToLawyerOffer($offer);
    }

    public function listOffers()
    {
        return $this->repository->listOffers();
    }

    public function listOfferByOrder($orderId)
    {
        $this->getOrder($orderId);
        return $this->repository->listOffersByOrder($orderId);
    }

    private function getLawyer($lawyerId)
    {
        $lawyer = $this->lawyerService->getLawyer($lawyerId);

        if (! $lawyer) {
            throw new \Exception('Lawyer not found');
        }

        return $lawyer;
    }

    private function getOrder($orderId)
    {
        $order = $this->orderService->get($orderId);

        if (! $order) {
            throw new \Exception('order not found');
        }

        return $order;
    }

}