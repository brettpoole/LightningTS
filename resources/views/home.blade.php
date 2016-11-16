@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/projects" class="btn btn-primary">View all projects</a>
                    <a href="/tasks" class="btn btn-primary">View all tasks</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
