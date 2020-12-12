<?php

use Illuminate\Database\Seeder;
use App\Model\Item;

class itemseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
	        ['name' => 'Es Krim', 'price' => '50000', 'cost' => '100000']
	    ];

	    Item::insert($data);
    }
}
