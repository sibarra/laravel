<?php

class User extends Eloquent
{
    protected $fillable = array ('name', 'password', 'email');

    public function isValid($data)
    {
        $rules = array(
            'name'      => array('required', 'min:5'),
            'email'     => array('required'),
            'password'  => array('required')
        );

        $validate = Validator::make($data, $rules);

        return $validate;

    }
}
