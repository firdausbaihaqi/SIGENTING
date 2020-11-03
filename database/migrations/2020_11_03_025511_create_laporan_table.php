<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ibu')->constrained('ibu');
            $table->foreignId('id_anak')->constrained('anak');
            $table->foreignId('id_status_kesehatan_ibu')->constrained('status_kesehatan_ibu');
            $table->foreignId('id_status_kesehatan_anak')->constrained('status_kesehatan_anak');
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
        Schema::dropIfExists('laporan');
    }
}
