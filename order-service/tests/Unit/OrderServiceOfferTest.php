<?php

namespace Tests\Unit;

use App\Application\Service\OrderLawyerOfferService;
use App\Application\ServiceOrderService;
use App\Infrastructure\Repository\OrderToLawyerRepository;
use App\Infrastructure\Service\LawyerService;
use Tests\TestCase;

class OrderServiceOfferTest extends TestCase
{
    public function testCreateOffer()
    {
        $offerService = new OrderLawyerOfferService(
            $this->getRepositoryMock(),
            $this->getLawyerServiceMock(),
            $this->getOrderServiceMock()
        );

        $offer = $offerService->createOrderServiceOffer($this->getCreateMock());
        $this->assertEquals($offer, $this->getCreateMock());
    }

    private function getCreateMock()
    {
        return [
            'id'=> 1,
            'order_id'=> 1,
            'lawyer_id'=> 1,
            'value'=> 100,
        ];
    }

    private function getOrderServiceMock()
    {
        $client = $this->getMockBuilder(ServiceOrderService::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->method('get')
            ->willReturn([
                'id' => 1,
                'company_id' => 1,
                'title' => 'test',
                'desc' => 'desc test',
                'status' => 1
            ]);

        return $client;
    }

    private function getLawyerServiceMock()
    {
        $client = $this->getMockBuilder(LawyerService::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->method('getLawyer')
            ->willReturn([
                'id'=> 1,
                'name'=> 'Lawyer Test',
                'phone'=> '99999999',
                'mail' => 'laywer@company.com',
                'document'=> '10101010392'
            ]);

        return $client;
    }

    private function getRepositoryMock()
    {
        $client = $this->getMockBuilder(OrderToLawyerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->method('createOrderToLawyerOffer')
            ->willReturn($this->getCreateMock());

        return $client;
    }
}
