<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgramStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('program_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('program_id')->integers();
            $table->string('user_id')->integers();
            $table->string('bank');
            $table->string('amount');
            $table->string('active');
            $table->string('transaction_no');
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
        //
    }
}
