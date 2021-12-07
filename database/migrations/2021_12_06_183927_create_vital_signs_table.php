<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->string('oximetry');
            $table->string('b_frequency');
            $table->string('h_rate');
            $table->string('temperature');
            $table->string('b_pressure');
            $table->string('glycemia');

            $table->unsignedBigInteger('user_id')->default(1)->nullable()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            
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
        Schema::dropIfExists('vital_signs');
    }
}
