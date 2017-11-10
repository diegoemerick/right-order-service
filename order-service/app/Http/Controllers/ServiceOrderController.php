<?php

namespace App\Http\Controllers;

use App\Application\ServiceOrderService;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    private $serviceOrderService;

    public function __construct(
        ServiceOrderService $serviceOrderService
    )
    {
        $this->serviceOrderService = $serviceOrderService;
    }

    public function create(Request $request)
    {
        if ($request->get('form')) {
            $lawyer = $this->serviceOrderService->create($request->get('form'));
            return $lawyer;
        }
        return null;
    }

    public function update(Request $request, $id)
    {
        return $this->serviceOrderService->update($request->get('form'), $id);
    }

    public function delete($id)
    {
        return $this->serviceOrderService->delete($id);
    }

    public function get($id)
    {
        return $this->serviceOrderService->get($id);
    }

    public function index()
    {
        return $this->serviceOrderService->index();
    }
}
