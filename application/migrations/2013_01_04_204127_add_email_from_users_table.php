<?php

class Add_Email_From_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->string('email');
			$table->integer('phone');
			$table->string('address');
			$table->string('adsense');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column(array('email', 'phone', 'address', 'adsense'));
	});

    }

}