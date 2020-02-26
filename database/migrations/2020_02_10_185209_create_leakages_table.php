<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeakagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leakages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('area', 8, 2)->nullable();
            $table->integer('zone_id')->nullable();
            $table->integer('woa_id')->nullable();
            $table->integer('dma_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('stype_id')->nullable();
            $table->string('est_saving')->nullable();
            $table->integer('is_t4_completed')->nullable();
            $table->decimal('x', 10, 2)->nullable();
            $table->decimal('y' , 10, 2)->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('leakages');
    }
}
