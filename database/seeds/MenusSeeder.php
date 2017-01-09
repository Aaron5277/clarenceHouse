<?php

use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('menus')->delete();

	    for ($i=0; $i < 5; $i++) {
	        \App\Menu::create([
	            'title'   => 'Title_'.$i,
	            'name'   => 'Name '.$i,
	            'description'    => 'Description '.$i,
	            'price' => 30,
	            'type'   => 'Type '.$i,
	            'menu_id'   => 6,
	        ]);
	    }
    }
}
