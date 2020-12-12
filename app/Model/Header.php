<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'trx_po_h';
    protected $fillable = [
        'po_number', 'po_date','po_price_total','po_cost_total', 'created_at','updated_at'
    ];
}
