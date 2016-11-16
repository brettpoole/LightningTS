@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Projects</div>

                <div class="panel-body">
                    <h2>{{$task->id}}: {{$task->name}}</h2>
                    <p>{{$task->definition}}</p>
                    <div class="well">
                        <h6>Task Members</h6>
                        @foreach ($task->members as $member)
                        <p>{{ $member->name }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
