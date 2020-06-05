<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesEvolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases_evolutions', function (Blueprint $table) {
            $table->id();
            $table->boolean('sinan_identification_form_completed');
            $table->boolean('sinan_identification_form_forwarded');
            $table->boolean('warning_conselho_tutelar');
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
        Schema::dropIfExists('case_evolutions');
    }
}
