<?php

use Illuminate\Database\Seeder;
use App\Model\Header;

class headerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
	        ['po_number' => '0001', 'po_date' => '2020-12-12', 'po_price_total' => '100000','po_cost_total' => '500000']
	    ];

	    Header::insert($data);
    }
}
