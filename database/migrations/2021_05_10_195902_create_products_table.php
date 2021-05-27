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
            $table->integer("price");
            $table->integer("offerprice");
            $table->string("delivery");
            $table->integer("deliverycharge");
            $table->integer("totalprice");
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
