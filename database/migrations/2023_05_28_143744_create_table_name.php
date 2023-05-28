<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitdata', function (Blueprint $table) {
            $table->id();
            $table->string('rfp_no')->nullable();
            $table->string('position_name')->nullable();
            $table->string('region')->nullable();
            $table->string('lever')->nullable();
            $table->string('duty_station')->nullable();
            $table->string('position_level')->nullable();
            $table->string('type_of_position')->nullable();
            $table->string('Reason_for_hire')->nullable();
            $table->string('recruitment_start_date')->nullable();
            $table->string('offer_acceptance_date')->nullable();
            $table->string('candidate_reporting_date')->nullable();
            $table->string('time_taken_to_hire')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('rfp_initiated_date')->nullable();
            $table->string('tor_revision')->nullable();
            $table->string('rfp_approval_process')->nullable();
            $table->string('wfc')->nullable();
            $table->string('advertising')->nullable();
            $table->string('receiving_application_in_zoho')->nullable();
            $table->string('pre_screening_applications')->nullable();
            $table->string('interview_stage')->nullable();
            $table->string('reeference_checks')->nullable();
            $table->string('submission_documents_total_reward')->nullable();
            $table->string('remarks')->nullable();

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
        Schema::dropIfExists('recruitdata');
    }
}
