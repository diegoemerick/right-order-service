<?php
/**
 * Created by PhpStorm.
 * User: diegoemerick
 * Date: 10/11/17
 * Time: 17:06
 */

namespace App\Infrastructure\Repository;


use App\Domain\Model\ServiceOrder;
use App\Domain\Repository\ServiceOrderRepositoryInterface;

class ServiceOrderRepository implements ServiceOrderRepositoryInterface
{
    public function create($serviceOrder)
    {
        return ServiceOrder::create($serviceOrder);
    }

    public function update($serviceOrder, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }
}