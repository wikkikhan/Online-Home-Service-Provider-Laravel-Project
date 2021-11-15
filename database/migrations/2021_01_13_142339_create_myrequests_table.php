<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myrequests', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('customer_id');
            $table->string('customer_name',30);
            $table->unsignedBigInteger('employee_id');
            $table->string('city',15);
            $table->string('phone',15);
            $table->string('request',15);
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade');

            $table->foreign('employee_id')->references('id')->on('employees')
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
        Schema::dropIfExists('myrequests');
    }
}
