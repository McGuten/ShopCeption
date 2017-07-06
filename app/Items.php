<?php

namespace ShopCeption;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price','currency', 'tag', 'stock', 'image', "description", 'shop_id'
    ];

    public function shop () {
    	return $this->belongTo(User::class);
    }
}
