<?php

// Simulate logged in user
Auth::loginUsingId(1);

// No real views for this demo.
// So just look over the Validation layer
// in Acme\Services\Validation
Route::resource('users', 'UsersController');