<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable {
    use TransformableTrait;
    protected $fillable = ['user_id', 'user_deliveryman_id', 'total', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->hasMany(OrderItem::class);
    }

    public function deliveryman(){
        return $this->belongsTo(User::class, 'user_deliveryman_id');
    }
}
