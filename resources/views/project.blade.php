@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$project->id}}: {{$project->name}}</div>

                <div class="panel-body">
                    <p>{{$project->description}}</p>
                    <em>Members</em>
                    <ul>
                        @foreach ($project->members as $member)
                        <li>{{ $member->name }}</li>
                        @endforeach
                    </ul>

                    <em>Tasks</em>
                    <ul class="list-group">
                        @foreach($project->tasks as $task)
                        <a href="{{ url('/task/' . $task->id) }}" class="list-group-item">{{ $task->name }}</a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
