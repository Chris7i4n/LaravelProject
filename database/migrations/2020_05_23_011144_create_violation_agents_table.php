<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViolationAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('violation_agents', function (Blueprint $table) {
            $table->id();
            $table->string('kinship');
            $table->integer('gender_id');
			$table->integer('age');
            $table->timestamps();
            

            $table->foreign('gender_id')
            ->references('id')
            ->on('genders')
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
        Schema::dropIfExists('violation_agents');
    }
}
