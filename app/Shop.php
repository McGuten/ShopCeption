<?php

namespace ShopCeption;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id','items_id'
    ];

    public function user () {
    	return $this->hasOne(User::class);
    }
    public function item () {
    	return $this->hasMany(Items::class);
    }
}
