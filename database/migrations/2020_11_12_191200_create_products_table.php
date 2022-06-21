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
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('code')->nullable(); 
            $table->integer('price')->default(0);
            $table->integer('discount')->default(0);
            $table->text('description_sort')->nullable();
            $table->text('description_large')->nullable();
            $table->text('img')->nullable();
            $table->integer('idcategory');
            $table->integer('idtype');
            $table->enum('status',['Activo','Inactivo']);
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