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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("avatar")->nullable();
            $table->string("position")->nullable();
            $table->string("password")->nullable();
            $table->string("phone")->nullable();
            $table->string("role")->nullable();
            $table->string("email")->nullable();
            $table->string("address")->nullable();
            $table->string("created_by")->nullable();
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
        Schema::dropIfExists('employees');
    }
};