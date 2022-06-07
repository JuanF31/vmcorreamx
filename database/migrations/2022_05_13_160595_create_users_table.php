<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('lastname_d', 30);
            $table->string('lastname_m', 30);
            $table->string('username', 30)->unique();
            $table->string('slug')->unique();
            $table->string('position', 60);
            $table->string('email')->unique();
            $table->string('lada')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('url_linkedin')->nullable();
            $table->enum('gender',['M', 'F']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('rol', ['admin','user'])->default('user');
            $table->string('profile_avatar');
            $table->foreignId('degree_study_id')->constrained()->onDelete('cascade');
            $table->foreignId('department_id')->constrained()->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
