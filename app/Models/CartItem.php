<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\AddCartRequest;
use App\Models\CartItem;

class CartItem extends Model
{
    //
    protected $fillable = ['amount'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}
