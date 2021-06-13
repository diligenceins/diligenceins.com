<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->text('toc');
            $table->text('description');
            $table->date('published');
            $table->integer('single_price')->unsigned();
            $table->integer('multiple_price')->unsigned();
            $table->integer('corporate_price')->unsigned();
            $table->integer('category_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('meta_id')->index()->unsigned();
            $table->boolean('status');
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
        Schema::dropIfExists('reports');
    }
}
