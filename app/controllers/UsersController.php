<?php

use Acme\Services\Validation\ValidationException;

class UsersController extends BaseController {

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->beforeFilter('auth');
    }

    /**
     * Edit a User
     *
     * @return Response
     */
    public function edit()
    {
        return View::make('users.edit');
    }

    /**
     * Update authenticated user
     *
     * @return mixed
     */
    public function update()
    {
        try
        {
            // We're just using the authenticated user
            // here to be quick. You can find the user instead.
            Auth::user()->update(Input::all());

            return Redirect::to('/');
        }

        catch(ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }
}
