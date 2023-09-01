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
        Schema::create('dcm_evaluations', function (Blueprint $table) {
            $table->string('dcm_phhone')->nullable();
            $table->string('region')->nullable();
            $table->string('zone')->nullable();
            $table->string('secteur')->nullable();
            $table->string('categorie')->nullable();
            $table->string('obj_ga')->nullable();
            $table->string('rea_ga')->nullable();
            $table->string('obj_ga_om')->nullable();
            $table->string('rea_ga_om')->nullable();
            $table->string('obj_sso')->nullable();
            $table->string('rea_sso')->nullable();
            $table->string('obj_etopup')->nullable();
            $table->string('rea_etopup')->nullable();
            $table->string('obj_cico')->nullable();
            $table->string('rea_cico')->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
