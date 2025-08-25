<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->nullable();
			$table->text("description")->nullable();
			$table->mediumText("shortdescription")->nullable();
			$table->string("slug")->nullable();
			$table->double("price")->nullable();
			$table->string("image")->nullable();
			$table->integer("quantity")->nullable();
			$table->boolean("futured")->nullable();
			$table->boolean("published")->nullable();
			$table->boolean("bestseller")->nullable();
			$table->string("type")->nullable();
			$table->string("youtubelink")->nullable();
			$table->mediumText("metadescription")->nullable();
			$table->string("metatitle")->nullable();
			$table->text("seokeywords")->nullable();
			
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
        Schema::dropIfExists('products');
    }
}
