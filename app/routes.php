<?php



/**
 * Application Routes
 * 
 * Write your route here.
 * 
 */



Route::get('/', function()
{
	//echo View::render('index');

	IndexController::index();
});