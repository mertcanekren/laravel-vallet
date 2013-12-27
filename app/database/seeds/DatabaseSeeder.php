<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('ValletSeeder');
	}

}
class ValletSeeder extends Seeder {

	public function run()
	{
		DB::table('vallet')->delete();

        $data = array(
            array(
            'content' => 'Kasa',
            'amount' => '100',
            'remaining' => '100',
			'status' => 'insert',
            'created_at' => date('Y-m-d H:i:s')
            ),
            array(
            'content' => 'Alışveriş',
            'amount' => '50',
            'remaining' => '50',
			'status' => 'exit',
            'created_at' => date('Y-m-d H:i:s')
			)
        );
        
        DB::table('vallet')->insert($data);
        $this->command->info('+ vallet');
	}

}
