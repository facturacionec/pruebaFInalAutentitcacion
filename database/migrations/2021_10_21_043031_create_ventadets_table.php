<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentadetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventadets', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->double("cantidad");
            $table->double("precio");


            $table->unsignedBigInteger('ventacab_id');

            $table->foreign('ventacab_id')
                ->references('id')
                ->on('ventacabs')
                ->onDelete('cascade');

            $table->unsignedBigInteger('producto_id');

            $table->foreign('producto_id')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade');

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
        Schema::dropIfExists('ventadets');
    }
}
