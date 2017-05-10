<?php
use Delivery\Models\Order;
use Delivery\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        factory(Order::class, 10)->create()->each(function($o){
            for($i = 0; $i <= 2; $i++){
                $o->items()->save(factory(OrderItem::class)->make([
                    'product_id' => rand(1, 5),
                    'price' => rand(5, 50),
                    'qtd' => 2
                ]));
            }
        });
    }
}
