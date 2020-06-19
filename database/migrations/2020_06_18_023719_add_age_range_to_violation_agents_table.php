<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgeRangeToViolationAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('violation_agents', function (Blueprint $table) {
						$table->integer('age_range_id')->nullable();
						
						$table->foreign('age_range_id')
									->references('id')
									->on('age_ranges_violation_agents')
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
        Schema::table('ViolationAgents', function (Blueprint $table) {
            $table->dropColumn('age_range_id');
        });
    }
}
