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
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('nip', 60);
            $table->string('nama_user', 60);
            $table->string('alamat', 60);
            $table->string('unit_kerja',60);
            $table->string('email',60);
            $table->string('nomor_telepon', 60);
            $table->string('username_user', 60);
            $table->string('password_user', 60);
            $table->string('hak_akses_folder', 60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
