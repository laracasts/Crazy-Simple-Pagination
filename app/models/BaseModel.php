<?php

class BaseModel extends Eloquent {

    /**
     * When updating a user, run the attributes
     * through a validator first.
     *
     * We could also use observers for this
     * sort of thing. However, this has a couple advantages.
     *
     * @param array $attributes
     *
     * @return void
     */
    public function update(array $attributes = [])
    {
        $class = get_class($this);
        $path = "Acme\\Services\\Validation\\{$class}Validator";

        if (class_exists($path))
        {
            App::make($path)->validateForUpdate($attributes);
        }

        parent::update($attributes);
    }

}

