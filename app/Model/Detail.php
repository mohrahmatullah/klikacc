<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'trx_po_d';
    protected $fillable = [
        'po_h_id', 'po_item_id','po_item_qyt','po_item_price', 'po_item_cost', 'created_at','updated_at'
    ];
}
