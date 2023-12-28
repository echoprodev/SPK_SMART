<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiAlternatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_alternatif', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alternatif');
            $table->integer('N_usia');
            $table->float('NU_usia');
            $table->integer('N_sertifikat');
            $table->float('NU_sertifikat');
            $table->integer('N_pengalaman');
            $table->float('NU_pengalaman');
            $table->integer('N_bb');
            $table->float('NU_bb');
            // $table->float('N_utility');
            $table->float('N_total');
            $table->float('rank');
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
        Schema::dropIfExists('nilai_alternatif');
    }
}
