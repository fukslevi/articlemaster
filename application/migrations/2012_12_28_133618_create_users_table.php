<?php

class Create_Users_Table {    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('usr_first_name');
			$table->string('usr_last_name');
			$table->integer('usr_age')->nullable();
			$table->string('usr_email')->unique();
			$table->string('usr_info');
			$table->string('usr_sex');
			$table->integer('usr_date');
			$table->integer('usr_phone')->unique();
			$table->string('usr_address')->unique();
			$table->string('usr');
			$table->string('usr_adsense')->unique();
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('users');

    }

}