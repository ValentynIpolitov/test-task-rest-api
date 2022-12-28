<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_accomodation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('accomodation_name');
            $table->bigInteger('employee_id')->unsigned();
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_accomodation_requests');
    }
};
