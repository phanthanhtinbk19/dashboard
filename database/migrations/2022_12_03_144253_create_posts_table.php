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
            $table->integer('category_id')->unsigned();
            $table->integer('kind_id')->unsigned();
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
            $table->foreign('kind_id')
            ->references('id')
            ->on('kinds')
            ->onDelete('cascade');
            $table->string("created_by")->default("tin phan");
            $table->string("updated_by");
            $table->json("images");
            $table->string("price");
            $table->string("area");
            $table->boolean("like")->default(0)->change();
            $table->string("address");
            $table->text("desc");
            $table->integer("status");
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