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

class ServiceOrderService implements ServiceOrderServiceInterface
{
    private $repository;
    private $companyService;

    public function __construct(
        CompanyService $companyService,
        ServiceOrderRepository $repository
    )
    {
        $this->companyService = $companyService;
        $this->repository = $repository;
    }

    public function create($serviceOrder)
    {
        $company = $this->companyService->getCompany($serviceOrder['company_id']);

        if (! $company) {
            throw new \Exception('Company not found');
        }

        $this->repository->create($serviceOrder);
    }

    public function update($serviceOrder, $id)
    {
        // TODO: Implement update() method.
    }

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}