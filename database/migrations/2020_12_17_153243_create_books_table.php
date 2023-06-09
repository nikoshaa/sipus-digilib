<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('books')) {
            Schema::create('books', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('author_id');
                $table->unsignedBigInteger('category_id');
                $table->string('title');
                $table->text('description');
                $table->string('cover');
                $table->timestamp('deleted_at')->nullable()->default(null);
                $table->timestamp('updated_at')->nullable()->default(null);
                $table->timestamp('created_at')->nullable()->default(null);


                $table->foreign('author_id')->references('id')->on('authors')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');

                $table->foreign('category_id')->references('id')->on('categories')->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
            });
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
