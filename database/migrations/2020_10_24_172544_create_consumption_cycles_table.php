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
            $table->index([ 'full_name']);

            $table->id();
            $table->unsignedInteger('cycle_id');
            $table->string('full_name',191);
            $table->text('mobile');
            $table->text('address');
            $table->unsignedBigInteger('previous');
            $table->unsignedBigInteger('curent')->nullable();
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
