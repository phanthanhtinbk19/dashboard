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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments("id");
            $table->string("title");
            $table->string("desc")->nullable();
            $table->string("address")->nullable();
            $table->string("images")->nullable();
            $table->integer('kind_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string("price")->nullable();
            $table->string("area")->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};