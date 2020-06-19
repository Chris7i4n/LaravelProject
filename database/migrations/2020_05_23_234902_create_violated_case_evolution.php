<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViolatedCaseEvolution extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_evolution_violated', function (Blueprint $table) {
            $table->integer('violated_id');
            $table->integer('case_evolution_id');


            $table->foreign('violated_id')
                  ->references('id')
                  ->on('violateds')
                  ->onDelete('cascade');
            
            $table->foreign('case_evolution_id')
                  ->references('id')
                  ->on('cases_evolutions')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('violated_case_evolution');
    }
}
