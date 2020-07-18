<?php
// php artisan make:model Store -m
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            // php artisan migrate
            $table->bigIncrements('id');
            $table->string('store_name')->nullable();
            $table->mediumText('store_information');
            $table->string('store_category')->nullable();
            $table->string('owner_name');
            $table->string('staff_name');
            $table->integer('phone_no')->nullable();
            $table->integer('house_no');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country');
            $table->string('postcode')->nullable();
            $table->mediumText('qr_code');
            $table->string('open_time');
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
        Schema::dropIfExists('stores');
    }
}
