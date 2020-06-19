<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViolationDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('violation_data', function (Blueprint $table) {
            $table->id();
            $table->integer('primary_violence');
            $table->integer('secundary_violence');
            $table->mediumText('other_violence')->nullable();
            $table->integer('violated_id');
            $table->timestamps();

            $table->foreign('violated_id')
                  ->references('id')
                  ->on('violateds')
                  ->onDelete('cascade');

            $table->foreign('primary_violence')
                  ->references('id')
                  ->on('violation_types')
                  ->onDelete('cascade');

            $table->foreign('secundary_violence')
                  ->references('id')
                  ->on('violation_types')
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
        Schema::dropIfExists('violation_data');
    }
}
