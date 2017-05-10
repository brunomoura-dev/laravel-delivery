<?php

namespace Delivery\Http\Controllers\Admin;

use Delivery\Http\Controllers\Controller;
use Delivery\Http\Requests\AdminOrderRequest;
use Delivery\Repositories\OrderRepository;
use Delivery\Repositories\UserRepository;
use Delivery\Services\OrderStatusService;

class OrdersController extends Controller {
    /** @var OrderRepository  */
    private $repository;

    function __construct(OrderRepository $repository){
        $this->repository = $repository;
    }

    public function index(){
        $orders = $this->repository->paginate();
        return view('admin.order.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository, OrderStatusService $statusService){
        $order = $this->repository->find($id);
        $deliverymans = $userRepository->findWhere(['role' => 'deliveryman'])->pluck('name', 'id');
        $status = $statusService->getStatus();
        return view('admin.order.update', compact('order', 'status', 'deliverymans'));
    }

    public function create(){
        return view('admin.order.create');
    }

    public function store(AdminOrderRequest $request){
        $this->repository->create($request->all());

        return redirect()->route('admin.order.index');
    }

    public function update(AdminOrderRequest $request, $id){
        $this->repository->update($request->all(), $id);

        return redirect()->route('admin.order.index');
    }
}
