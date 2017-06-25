<?php
/**
 * Created by PhpStorm.
 * User: Bruno Moura
 * Date: 09/05/2017
 * Time: 15:56
 */

namespace Delivery\Services;

use Delivery\Repositories\CupomRepository;
use Delivery\Repositories\OrderRepository;
use Delivery\Repositories\ProductRepository;

class OrderService {
    /**
     * @var OrderRepository
     */
    private $orderRepository;
    /**
     * @var ProductRepository
     */
    private $productRepository;
    /**
     * @var CupomRepository
     */
    private $cupomRepository;

    /**
     * OrderService constructor.
     */
    public function __construct(OrderRepository $orderRepository, ProductRepository $productRepository, CupomRepository $cupomRepository){
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->cupomRepository = $cupomRepository;
    }

    public function create(array $data){
        \DB::beginTransaction();
        try{
            $data['status'] =  $data['total'] = 0;
            if(isset($data['cupon_code'])){
                $cupom = $this->cupomRepository->findByField('code', $data['cupon_code'])->first();
                $data['cupon_id'] = $cupom->id;
                $cupom->used = 1;
                $cupom->save();
                unset($data['cupon_code']);
            }

            $items = $data['items'];
            unset($data['items']);


            $order = $this->orderRepository->create($data);
            $total = 0;

            foreach($items as $item){
                $item['price'] = $this->productRepository->find($item['product_id'])->price;
                $order->items()->create($item);
                $total += $item['price'] * $item['qtd'];
            }
            $order->total = $total;

            if(isset($cupom)){
                $order->total = $total - $cupom->value;
            }
            $order->save();

            \DB::commit();

        }catch(\Exception $e){
           \DB::rollback();
            throw $e;
        }

    }
}