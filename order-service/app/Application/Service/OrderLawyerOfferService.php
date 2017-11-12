<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 11/12/17
 * Time: 7:22 PM
 */

namespace App\Application\Service;


use App\Domain\Model\Lawyer;
use App\Infrastructure\Repository\OrderToLawyerRepository;
use App\Infrastructure\Service\LawyerService;

class OrderLawyerOfferService
{
    private $repository;
    private $lawyerService;

    public function __construct(
        OrderToLawyerRepository $repository,
        LawyerService $lawyerService
    )
    {
        $this->repository = $repository;
        $this->lawyerService = $lawyerService;
    }

    public function orderServiceOffer($offer)
    {
        if (! $offer['laywer_id']) {
            throw new \Exception('Lawyer not send');
        }

        $lawyer = $this->getLawyer($offer['laywer_id']);
        $this->repository->createOrderToLawyerOffer($offer);
    }

    private function getLawyer($lawyerId)
    {
        $lawyer = $this->lawyerService->getLawyer($lawyerId);

        if (! $lawyer) {
            if (! $lawyer) {
                throw new \Exception('Lawyer not found');
            }
        }

        return $lawyer;
    }
}