<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string("prodtype");
            $table->string("name");
            $table->string("productdescription");
            $table->string("stock");
            $table->string("price");
            $table->string("offerprice");
            $table->string("delivery");
            $table->string("deliverycharge");
            $table->string("totalprice");
            $table->string("gallery");


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
        Schema::dropIfExists('products');
    }
}
