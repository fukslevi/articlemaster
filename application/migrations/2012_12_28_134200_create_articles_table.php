<?php

class Create_Articles_Table {    

	public function up()
    {
		Schema::create('articles', function($table) {
			$table->increments('id');
			$table->string('art_title');
			$table->string('art_content');
			$table->integer('art_authid');
			$table->integer('art_catid');
			$table->integer('art_views');
			$table->string('art_seo_titl');
			$table->string('art_seo_content');
			$table->string('art_seo_tags');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('articles');

    }

}