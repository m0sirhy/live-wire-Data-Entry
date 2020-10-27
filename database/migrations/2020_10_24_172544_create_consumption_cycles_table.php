<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumptionCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumption_cycles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cycle_id');
            $table->text('full_name');
            $table->text('mobile');
            $table->text('address');
            $table->unsignedInteger('previous');
            $table->unsignedInteger('curent')->nullable();
            $table->unsignedInteger('label')->default(1);

            $table->timestamps();
            $table->foreign('cycle_id')->references('id')->on('cycles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consumption_cycles');
    }
}
