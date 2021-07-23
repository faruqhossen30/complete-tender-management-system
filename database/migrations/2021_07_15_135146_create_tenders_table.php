<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->integer('tenderID');
            $table->integer('tender_type_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('department_id');
            $table->integer('country_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->text('description');
            $table->double('tenderSecurity');
            $table->double('tenderBudget');
            $table->dateTime('lastDate');
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('tenders');
    }
}
