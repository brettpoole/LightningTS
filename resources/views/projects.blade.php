@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Projects</div>

                <div class="panel-body">
                    <div class="project-list">
                    @if (count($projects) > 0)
                    @foreach ($projects as $project)
                        <a href="{{ url('/project/' . $project->id) }}" class="project-list-item">
                            <img src="{{ $project->avatar }}" width="75px" height="75px">
                            <p>{{ $project->name }}</p>
                            <p>{{ $project->description }}</p>
                        </div>
                    @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
