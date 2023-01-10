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
        Schema::create('passwords', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->foreignId('user_id');
            $table->longText('icon');
            $table->text('identifier');
            $table->text('password');
            $table->longText('url');
            $table->integer('category')->nullable();
            $table->json('tags')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('trash')->default(0);
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
        Schema::dropIfExists('passwords');
    }
};
