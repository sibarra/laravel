{{ Form::open(array('action' => 'UserController@store')) }}
    <p>
        Name: {{ Form::text('name', Input::old('name')) }}
    </p>

    <p>
        Email: {{ Form::text('email') }}
    </p>

    <p>
        Password: {{ Form::password('password') }}
    </p>
    <p>
        {{ Form::submit('Submit') }}
    </p>
