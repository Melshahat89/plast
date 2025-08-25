<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    		if (!Schema::hasColumn("products", "categories_id"))
		{
	Schema::table("products", function (Blueprint $table)  {
		$table->integer("categories_id")->unsigned();

	});		}

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::disableForeignKeyConstraints();
		if (Schema::hasColumn("products", "categories_id"))
		{
			$arrayOfKeys = $this->listTableForeignKeys("products");
			Schema::table("products", function ($table) use ($arrayOfKeys) {
			Schema::disableForeignKeyConstraints();
				if(in_array("products_categories_id_foreign" , $arrayOfKeys)){
					$table->dropForeign("products_categories_id_foreign");
					$table->dropColumn("categories_id");
				}else{
					$table->dropColumn("categories_id");
				}
			Schema::enableForeignKeyConstraints();
			});
		}
		Schema::enableForeignKeyConstraints();

    }
}
