<?php

namespace Delivery\Http\Controllers;

use Delivery\Http\Controllers\Controller;
use Delivery\Http\Requests\AdminCategoryRequest;
use Delivery\Repositories\CategoryRepository;
use Delivery\Repositories\OrderRepository;
use Delivery\Repositories\ProductRepository;
use Delivery\Repositories\UserRepository;
use Delivery\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller {
    /**
     * @var OrderRepository
     */
    private $orderRepository;
    /**
     * @var ProductRepository
     */
    private $productRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var OrderService
     */
    private $orderService;

    function __construct(OrderRepository $orderRepository, ProductRepository $productRepository, UserRepository $userRepository, OrderService $orderService){

        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->userRepository = $userRepository;
        $this->orderService = $orderService;
    }

    public function index(){
        $clientId = $this->userRepository->find(Auth::user()->id)->client->id;
        $orders = $this->orderRepository->scopeQuery(function($query) use($clientId){
            return $query->where('client_id', '=', $clientId);
        })->paginate();

        return view('customer.order.index', compact('orders'));
    }

    public function create(){
        $products = $this->productRepository->all();

        return view('customer.order.create', compact('products'));
    }
    public function store(Request $request){
        $data = $request->all();
        $data['client_id'] = $this->userRepository->find(Auth::user()->id)->client->id;
        $this->orderService->create($data);

        return redirect()->route('customer.order.index');
    }
}
