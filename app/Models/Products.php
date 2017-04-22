<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {
    protected $fillable = ['category_id', 'name', 'description', 'price'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
