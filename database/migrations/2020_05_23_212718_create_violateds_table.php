<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViolatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('violateds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('gender_id');
            $table->integer('age');
            $table->integer('ethnicity_id');
            $table->boolean('is_deficient');
            $table->integer('locality_id');
            $table->integer('violation_agent_id');
            $table->integer('user_id');
            $table->timestamps();
        
        
        $table->foreign('gender_id')
              ->references('id')
              ->on('genders')
              ->onDelete('cascade');

        $table->foreign('ethnicity_id')
              ->references('id')
              ->on('ethnicities')
              ->onDelete('cascade');

        $table->foreign('locality_id')
              ->references('id')
              ->on('localities')
              ->onDelete('cascade');

        $table->foreign('violation_agent_id')
              ->references('id')
              ->on('violation_agents')
              ->onDelete('cascade'); 

        $table->foreign('user_id')
              ->references('id')
              ->on('users')
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
        Schema::dropIfExists('violateds');
    }
}
