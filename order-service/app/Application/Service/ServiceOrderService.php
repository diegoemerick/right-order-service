<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:39
 */

namespace App\Application;

use App\Infrastructure\Repository\ServiceOrderRepository;
use App\Infrastructure\Service\CompanyService;
use App\Domain\Service\ServiceOrderServiceInterface;
use App\Infrastructure\Service\LawyerService;

class ServiceOrderService implements ServiceOrderServiceInterface
{
    private $repository;
    private $companyService;
    private $lawyerService;

    public function __construct(
        CompanyService $companyService,
        ServiceOrderRepository $repository,
        LawyerService $lawyerService
    )
    {
        $this->companyService = $companyService;
        $this->repository = $repository;
        $this->lawyerService = $lawyerService;
    }

    public function create($serviceOrder)
    {
        $company = $this->companyService->getCompany($serviceOrder['company_id']);

        if (! $company) {
            throw new \Exception('Company not found');
        }

        return $this->repository->create($serviceOrder);
    }

    public function update($serviceOrder, $id)
    {
        $company = $this->companyService->getCompany($serviceOrder['company_id']);

        if (! $company) {
            if (! $company) {
                throw new \Exception('Company not found');
            }
        }

        return $this->repository->update($serviceOrder, $id);
    }

    public function defineLawyerResponseToOrder($id, $lawyerId)
    {
        $this->getLawyer($lawyerId);
        return $this->repository->defineLaywerToOrder($id, $lawyerId);
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function get($id)
    {
        return $this->repository->get($id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    private function getLawyer($lawyerId)
    {
        $lawyer = $this->lawyerService->getLawyer($lawyerId);

        if (! $lawyer) {
            throw new \Exception('Lawyer not found');
        }

        return $lawyer;
    }

}