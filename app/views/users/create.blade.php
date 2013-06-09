@extends('layouts.default')

@section("content")
<?php
if (isset($messages))
{
    foreach($messages->all() as $message)
    {
        echo $message;
    }
}

echo $form;
?>
@stop
