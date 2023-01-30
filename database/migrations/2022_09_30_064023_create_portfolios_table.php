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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('content')->nullable();
            $table->string('client')->nullable();
            $table->string('url')->nullable();
            $table->date('date')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->integer('lang')->default(1);
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
        Schema::dropIfExists('portfolios');
    }
};
