{{ Form::open() }}
    <p>
        Name: {{ Form::text('name') }}
    </p>

    <p>
        Email: {{ Form::text('email') }}
    </p>

    <p>
        Password: {{ Form::password('password') }}
    </p>
