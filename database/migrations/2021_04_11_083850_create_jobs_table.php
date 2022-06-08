<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('company_name');
            $table->string('c_name')->nullable;
            $table->string('employment_status')->nullable;
            $table->string('location')->nullable();
            $table->string('vacancy')->nullable();
            $table->string('educational_experiance');
            $table->string('experience_requirements')->nullable();
            $table->string('additional_requirements')->nullable();
            $table->string('salary');
            $table->date('published_on');
            $table->date('application_deadline');
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
        Schema::dropIfExists('jobs');
    }
}
