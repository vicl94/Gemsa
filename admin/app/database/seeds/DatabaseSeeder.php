<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        User::create(array('email' => 'admin', 'password' => Hash::make('admin'), 'name' => 'Administrador', 'type' => '3'));
	}

}
