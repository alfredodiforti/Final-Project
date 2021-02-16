<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_id'); // FK
            $table->string('name');
            $table->string('surname', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->char('vat', 11);
            
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

             //RELAZIONI
             $table->foreign('restaurant_id')
             ->references('id')
             ->on('restaurants')
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
        Schema::dropIfExists('users');
    }
}
