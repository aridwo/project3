<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('index');
});

Route::get('/loremipsum/{paragraph_number?}', function($paragraph_number = 1)
{
	$generator = new IpsumGenerator();
	$data['paragraph_number'] = $paragraph_number;
	$data['paragraphs'] = $generator->getParagraphs($data['paragraph_number']);
	return View::make('loremipsum', $data);});

Route::post('/loremipsum', function()
{
	$data = Input::all();
	$rules = array(
		'paragraph_number' => array('integer', 'min:1', 'max:10'));
	$validator = Validator::make($data, $rules);
if ($validator->passes()) {
	$generator = new IpsumGenerator();
	$data['paragraphs'] = $generator->getParagraphs($data['paragraph_number']);
return View::make('loremipsum', $data);}
return Redirect::to('/loremipsum')->withErrors($validator);});

Route::get('/randomuser/{user_count?}', function($user_count = 1)
{
	$faker = Faker::create();
	$data['user_count'] = $user_count;
	$data['birthdate'] = false;
	$data['profile'] = false;
for ($i=0; $i <= $user_count - 1; $i++) { 
		$user = array(
			'first_name' => $faker->firstName(),
			'last_name' => $faker->lastName(),
			'street' => $faker->streetAddress(),
			'city' => $faker->city(),
			'state' => $faker->stateAbbr(),
			'postcode' => $faker->postcode()
		);
$data['users'][$i] = $user;
	};
return View::make('randomuser', $data);});
Route::post('/randomuser', function()
{
	$data['user_count'] = Input::get('user_count');
	$data['birthdate'] = Input::get('birthdate');
	$data['profile'] = Input::get('profile');
	$rules = array(
'user_count' => array('integer', 'min:1', 'max:10')
	);
	$validator = Validator::make($data, $rules);
if ($validator->passes()) {
	$faker = Faker::create();
for ($i=0; $i <= $data['user_count'] - 1; $i++) { 
	$user = array(
					'first_name' => $faker->firstName(),
			'last_name' => $faker->lastName(),
			'street' => $faker->streetAddress(),
			'city' => $faker->city(),
			'state' => $faker->stateAbbr(),
			'postcode' => $faker->postcode());
$data['users'][$i] = $user;};
return View::make('randomuser', $data);}
return Redirect::to('/randomuser')->withErrors($validator);
});