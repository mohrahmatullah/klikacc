<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrxPoDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_po_d', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('po_h_id');
            $table->string('po_item_id');
            $table->string('po_item_qyt');
            $table->string('po_item_price');
            $table->string('po_item_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trx_po_d');
    }
}
