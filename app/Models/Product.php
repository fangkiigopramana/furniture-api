<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $guarded = 'id';

    public function type(){
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id');
    }


    

}
