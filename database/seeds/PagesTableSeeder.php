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
	       		'body' => "NGN500 for 11.39 litres, inc. service fees. Your tokens will be sent by SMS\n
	       		Present tokens at any nearest partner outlet\n 1. Accept\n0. Back",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1*2',
	       		'body' => "NGN1000 for 11.39 litres, inc. service fees. Your tokens will be sent by SMS\n
	       		Present tokens at any nearest partner outlet\n 1. Accept\n0. Back",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1*3',
	       		'body' => "NGN1500 for 11.39 litres, inc. service fees. Your tokens will be sent by SMS\n
	       		Present tokens at any nearest partner outlet\n 1. Accept\n0. Back",
	     	),
	     	array(
	     		'id' => (string) Str::uuid(),
	       		'page_id' => '1*4',
	       		'body' => "NGN2500 for 11.39 litres, inc. service fees. Your tokens will be sent by SMS\n
	       		Present tokens at any nearest partner outlet\n 1. Accept\n0. Back",
	     	),
	   ));
    }
}
