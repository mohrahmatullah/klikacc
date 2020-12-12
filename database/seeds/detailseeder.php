<?php

use Illuminate\Database\Seeder;
use App\Model\Detail;

class detailseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
	        ['po_h_id' => '1', 'po_item_id' => '1', 'po_item_qyt' => '100000','po_item_price' => '500000', 'po_item_cost' => '50000000']
	    ];

	    Detail::insert($data);
    }
}
