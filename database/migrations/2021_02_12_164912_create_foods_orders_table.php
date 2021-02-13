<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id');    // FK
            $table->unsignedBigInteger('order_id');   // FK            
            $table->timestamps();

            //RELAZIONE
            $table->foreign('food_id')
            ->references('id')
            ->on('foods')
            ->onDelete('cascade');

            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods_orders');
    }
}
