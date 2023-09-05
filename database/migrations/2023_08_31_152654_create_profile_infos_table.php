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
        Schema::create('profile_infos', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->foreignId('user_id');
            $table->text('goals')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->text('parents')->nullable();
            $table->text('h_school')->nullable();
            $table->float('gpa')->nullable();
            $table->string('act')->nullable();
            $table->string('major')->nullable();
            $table->text('achievements')->nullable();
            $table->string('club')->nullable();
            $table->string('position')->nullable();
            $table->text('c_achievements')->nullable();
            $table->string('footage')->nullable();
            $table->text('h_contact')->nullable();
            $table->text('additional_information')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_infos');
    }
};
