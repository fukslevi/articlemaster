<?php

class Delete_Email_From_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->drop_column(array('email', 'phone', 'address', 'adsense'));
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->string('email')->unique();
			$table->integer('phone')->unique();
			$table->string('address')->unique();
			$table->string('adsense')->unique();
	});

    }

}