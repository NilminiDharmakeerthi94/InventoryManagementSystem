<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Database\Migrations\Migration;

class CreateSuppliercontactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliercontact', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->unsigned();
            $table->string('email');
            $table->string('description');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('CASCADE');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliercontact');
    }
}
