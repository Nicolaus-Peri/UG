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
        Schema::create('members', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->timestamp('email_verfied_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('join_date')->nullable();
            $table->boolean('isActive')->nullable()->default(false);
            $table->dateTime('exit_date')->nullable();
            $table->boolean('isAdmin')->nullable()->default(false);
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
        Schema::dropIfExists('members');
    }
};