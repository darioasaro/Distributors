<?php

namespace Distributor;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'amount', 'price', 'description','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function distributor(){
        return $this->belongsTo('Distributor\Distributor');
    }
}
