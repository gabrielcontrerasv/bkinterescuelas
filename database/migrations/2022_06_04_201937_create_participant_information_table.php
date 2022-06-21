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
        Schema::create('participants', function (Blueprint $table) {
            $table->id()->unique();
            $table->Integer('#identification')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('photo');
            $table->string('gold')->default('0');
            $table->string('silver')->default('0');
            $table->string('bronze')->default('0');
            $table->string('blood_type');
            $table->date('birthday');
            $table->foreignId('type_doc_id')->constrained();
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('force_id')->constrained();
            $table->foreignId('sport_id')->constrained();
            $table->foreignId('nationality_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
