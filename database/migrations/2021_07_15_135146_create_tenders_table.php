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
            $table->text('description');
            $table->double('tenderSecurity');
            $table->double('tenderBudget');
            $table->string('department');
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
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
