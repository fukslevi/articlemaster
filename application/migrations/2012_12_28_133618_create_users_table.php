<?php

class Create_Users_Table {    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->integer('age')->nullable();
			$table->string('email')->unique();
			$table->string('info');
			$table->string('sex');
			$table->integer('date');
			$table->integer('phone')->unique();
			$table->string('address')->unique();
			$table->string('adsense')->unique();
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('users');

    }

}