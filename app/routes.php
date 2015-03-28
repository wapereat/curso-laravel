<?php


Route::get('/wapereat', function()
{
	return View::make('perfil.perfil')
                ->with("nombre","wilson")
                ->with("edad","24");
        
});

Route::get('/prueba', function()
{
	return View::make('prueba');
});

Route ::controller('personal','PersonalController');
