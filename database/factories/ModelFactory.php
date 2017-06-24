<?php
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Delivery\Models\Category;
use Delivery\Models\Client;
use Delivery\Models\Cupom;
use Delivery\Models\Order;
use Delivery\Models\OrderItem;
use Delivery\Models\Product;
use Delivery\Models\User;

$factory->define(User::class, function(Faker\Generator $faker){
    static $password;

    return ['name' => $faker->name, 'email' => $faker->unique()->safeEmail, 'password' => $password ?: $password = bcrypt('secret'), 'remember_token' => str_random(10),];
});
$factory->define(Category::class, function(\Faker\Generator $faker){
    return ['name' => $faker->word];
});
$factory->define(Product::class, function(\Faker\Generator $faker){
    return ['name' => $faker->word, 'description' => $faker->sentence, 'price' => $faker->numberBetween(10, 50)];
});
$factory->define(Client::class, function(\Faker\Generator $faker){
    return ['phone' => $faker->phoneNumber, 'address' => $faker->address, 'city' => $faker->city, 'state' => $faker->state, 'zipcode' => $faker->postcode];
});
$factory->define(Order::class, function(\Faker\Generator $faker){
    return ['client_id' => rand(1, 10), 'total' => rand(5, 50), 'status' => 0];
});
$factory->define(OrderItem::class, function(\Faker\Generator $faker){
    return [];
});
$factory->define(Cupom::class, function(\Faker\Generator $faker){
    return ['code' => rand(100, 10000), 'value' => rand(50, 100)];
});
