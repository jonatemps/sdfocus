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
        Schema::create('parcs', function (Blueprint $table) {
            $table->string('first_call')->nullable();
            $table->string('Actif')->nullable();
            $table->string('Deco')->nullable();
            $table->string('Reco')->nullable();
            $table->string('Charged_base')->nullable();
            $table->string('parc')->nullable();
            $table->string('event_date')->nullable();
            $table->string('Week_Nbr')->nullable();
            $table->string('mois')->nullable();
            $table->string('REGION_COMMERCIAL')->nullable();
            $table->string('TERRITOIRE_COMMERCIAL')->nullable();
            $table->string('Site_id')->nullable();
            $table->string('New_site_id')->nullable();
            $table->string('site_key')->nullable();
            $table->string('partenaire')->nullable();
            $table->string('site_name')->nullable();
            $table->string('secteur_com')->nullable();
            $table->string('new_technologie')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcs');
    }
};
