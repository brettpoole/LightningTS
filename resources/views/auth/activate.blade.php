@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Activation Email</div>
                <div class="panel-body">
                    <p>Hey {{ $user->name }}, your activation email has been sent!</p>
                    <a class="btn btn-xs btn-default" href="{{ url('/login') }}">Click here to login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
