@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Projects</div>

                <div class="panel-body">
                    <div class="task-list">
                    @if (count($tasks) > 0)
                    @foreach ($tasks as $task)
                        <a href="{{ url('/task/' . $task->id )}}" class="task-list-item">
                            <h3>{{$task->id}}: {{$task->name}}</h3>
                        </a>
                    @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
