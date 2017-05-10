<?php
use Delivery\Models\Client;
use Delivery\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        factory(User::class)->create([
            'name' => 'Bruno comum',
            'email' => 'user@user.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);

        factory(User::class)->create([
            'name' => 'Bruno admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
            'remember_token' => str_random(10),
        ]);

        factory(User::class, 3)->create([
            'role' => 'deliveryman'
        ]);

        factory(User::class, 10)->create()->each(function($u){
            $u->client()->save(factory(Client::class)->make());
        });


    }
}
