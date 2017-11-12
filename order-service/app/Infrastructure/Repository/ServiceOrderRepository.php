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
        $order = ServiceOrder::find($id);
        $order->title = $serviceOrder['title'];
        $order->description = $serviceOrder['description'];
        $order->company_id = $serviceOrder['company_id'];
        $order->save();

        return $order;
    }

    public function delete($id)
    {
        $order = ServiceOrder::find($id);
        $order->delete();
        return $id;
    }

    public function index()
    {
        return ServiceOrder::orderBy('id', 'desc')->get();
    }

    public function get($id)
    {
        return ServiceOrder::find($id);
    }

    public function defineLaywerToOrder($id, $lawyerId)
    {
        $order = ServiceOrder::find($id);
        $order->lawyer_id = $lawyerId;
        $order->status = 2;
        $order->save();

        return $order;
    }
}