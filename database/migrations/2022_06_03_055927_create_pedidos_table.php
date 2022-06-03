<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')
            ->nulleable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_negocio')
            ->nulleable()
            ->constrained('negocios')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_producto')
            ->nulleable()
            ->constrained('productos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->string('nombre');
            $table->integer('total');
            $table->integer('cantidad');
            $table->string('referencia');
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
        Schema::dropIfExists('pedidos');
    }
};
