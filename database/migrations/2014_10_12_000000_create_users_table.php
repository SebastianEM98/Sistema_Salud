<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->enum('document_type', ['cedula_ciudadana', 'cedula_extranjera','tarjeta_pasaporte','registro_civil','tarjeta_identidad']);
            $table->string('document')->unique();
            $table->enum('blood_type', ['A+', 'A-','B+','B-','AB+', 'AB-', 'O+', 'O-']);
            $table->string('latitude');
            $table->string('longitude');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('rol_id')->default(1)->nullable()->index();
            $table->foreign('rol_id')->references('id')->on('rols')->onDelete("cascade");

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
