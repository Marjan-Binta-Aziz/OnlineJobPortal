<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('f_name')->nullable();
            $table->string('lname')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('dob')->nullable();
            $table->string('sex')->nullable();
            $table->string('religion')->nullable();
            $table->string('cboMStatus')->nullable();
            $table->string('country')->nullable();
            $table->string('nid')->nullable();
            $table->string('passport')->nullable();
            $table->string('blood')->nullable();
            $table->string('txtMobile')->nullable();
            $table->string('s_email')->nullable();
            $table->boolean('is_admin')->default('0');
            $table->string('file')->default('file.pdf');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
