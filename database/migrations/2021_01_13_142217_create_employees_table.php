<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('service_id');
            $table->string('serviceTitle',30);
            $table->string('Name',30);
            $table->string('fatherName',30);
            $table->string('email',40);
            $table->string('phone',15);
            $table->string('CNIC',20);
            $table->string('password',30);
            $table->string('city',15);
            $table->string('Experiance',15);
            $table->string('available',15);
            $table->string('verif',20);
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')
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
        Schema::dropIfExists('employees');
    }
}
