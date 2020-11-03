<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusKesehatanIbuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_kesehatan_ibu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anak')->constrained('anak');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->integer('lingkar_kepala');
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
        Schema::dropIfExists('status_kesehatan_ibu');
    }
}
