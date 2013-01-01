<?php

class Create_Subcategories_Table {    

	public function up()
    {
		Schema::create('subcategories', function($table) {
			$table->increments('id');
			$table->integer('sub_cat_catid');
			$table->integer('sub_cat_name');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('subcategories');

    }

}