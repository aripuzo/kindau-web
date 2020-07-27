<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(array(
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '0',
	       		'body' => "Welcome to kindau\n\nI want to\n1. Borrow fuel\n 2. Buy fuel ticket",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1',
	       		'body' => "1. Get NGN 500\n2. Get NGN 1000\n3. Get NGN 1500\n4. Get NGN 2500\n\n 0. Back",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1*1',
	       		'body' => "You have selected NGN 500 for 11.39 litres, including service fees. Your tokens will be sent shortly through SMS\n
	       		Present tokens at any nearest outlet of\nOando, Total, MRS, Mobil\n 1. Accept\n0. Back",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1*2',
	       		'body' => "You have selected NGN 1000 for 11.39 litres, including service fees. Your tokens will be sent shortly through SMS\n
	       		Present tokens at any nearest outlet of\n Oando, Total, MRS, Mobil\n 1. Accept\n0. Back",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1*3',
	       		'body' => "You have selected NGN 1500 for 11.39 litres, including service fees. Your tokens will be sent shortly through SMS\n
	       		Present tokens at any nearest outlet of\n Oando, Total, MRS, Mobil\n 1. Accept\n0. Back",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1*4',
	       		'body' => "You have selected NGN 2500 for 11.39 litres, including service fees. Your tokens will be sent shortly through SMS\n
	       		Present tokens at any nearest outlet of\n Oando, Total, MRS, Mobil\n 1. Accept\n0. Back",
	     	),
	   ));
    }
}
