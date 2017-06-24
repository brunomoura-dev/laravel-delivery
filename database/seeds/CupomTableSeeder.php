<?php

use Delivery\Models\Cupom;
use Illuminate\Database\Seeder;

class CupomTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        factory(Cupom::class, 10)->create();
    }
}
