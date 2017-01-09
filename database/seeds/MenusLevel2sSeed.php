<?php

use Illuminate\Database\Seeder;

class MenusLevel2sSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus_level2s')->delete();

	    for ($i=0; $i < 5; $i++) {
	        \App\Menus_level2::create([
	            'title'   => 'Title_0',
	            'name'   => 'Name '.$i,
	            'description'    => 'Description '.$i,
	            'price' => 30,
	            'type'   => 'Type '.$i,
	            'menu_id' =>6,
	        ]);
	    }
	    for ($i=0; $i < 6; $i++) {
	        \App\Menus_level2::create([
	            'title'   => 'Title_1',
	            'name'   => 'Name '.$i,
	            'description'    => 'Description '.$i,
	            'price' => 30,
	            'type'   => 'Type '.$i,
	            'menu_id' =>6,
	        ]);
	    }
    }
}
