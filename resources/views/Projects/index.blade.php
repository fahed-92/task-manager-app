@extends('Layouts.master')

@section('content')

<div class="blog_section layout_padding">
    @foreach($projects as $project)
    <div class="container mb-5">
        <div class="row text-center text-black col-lg-6 col-md-2 col-sm-1">
            <div class="card text-center border-dark mt-5 mb-5">
                <div class="card-body" href="">
                    <h5 class="card-title">Project Name: {{$project->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $project->id }}</h6>
                    <p class="card-text">Description: {{$project->description}}</p>
                    <p class="card-text">Cost: {{$project->cost}}</p>
                    <p class="card-text">Exp_Duration:  {{$project->exp_duration}}</p>
                    <a class="btn btn-primary" type="button" href="{{ route('projects.show',$project->id) }}">View Project</a>
                    {{-- <a href="{{ route('projects',[$board->id])}}" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop
