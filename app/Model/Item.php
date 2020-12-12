<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'ms_item';
    protected $fillable = [
        'name', 'price','cost', 'created_at','updated_at'
    ];

    public function detail()
    {
        return $this->hasMany('App\Model\Detail');
    }
}
