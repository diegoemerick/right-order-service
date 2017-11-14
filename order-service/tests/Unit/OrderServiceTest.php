<?php

namespace Tests\Unit;

use App\Application\Service\OrderLawyerOfferService;
use App\Application\ServiceOrderService;
use App\Infrastructure\Repository\ServiceOrderRepository;
use App\Infrastructure\Service\CompanyService;
use App\Infrastructure\Service\LawyerService;
use Tests\TestCase;

class OrderServiceTest extends TestCase
{

    public function testCreateOrder()
    {
        $oderService = new ServiceOrderService(
            $this->getCompanyMock(),
            $this->getRepositoryMock(),
            $this->getLawyerMock()
        );

        $order = $oderService->create($this->getOrderMock());
        $this->assertEquals($order, $this->getOrderMock());
    }

    private function getCompanyMock()
    {
        $client = $this->getMockBuilder(CompanyService::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->method('getCompany')
            ->willReturn([
                    'id'=>1,
                    'name'=> 'Company Teste',
                    'activity'=> 'Tech'
                ]
            );

        return $client;
    }

    private function getLawyerMock()
    {
        $client = $this->getMockBuilder(LawyerService::class)
            ->disableOriginalConstructor()
            ->getMock();

        return $client;
    }

    private function getOrderMock()
    {
        return [
            'id' => 1,
            'company_id' => 1,
            'title' => 'test',
            'description' => 'desc test',
            'status' => 1
        ];
    }

    private function getRepositoryMock()
    {
        $client = $this->getMockBuilder(ServiceOrderRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->method('create')
            ->willReturn($this->getOrderMock());

        return $client;
    }


}
