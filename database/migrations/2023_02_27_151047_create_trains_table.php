<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('dep_station', 50);
            $table->string('arr_station', 50);
            $table->time('dep_time');
            $table->time('arr_time');
            $table->tinyInteger('code_train')->unsigned();
            $table->smallInteger('carriage_num')->unsigned();
            $table->boolean('in_time')->unsigned()->default(1);
            $table->boolean('is_deleted')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
