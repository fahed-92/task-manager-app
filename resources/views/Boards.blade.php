@extends('Layouts.master')

@section('content')

<div class="blog_section layout_padding">
    <div class="container">
        <a href="{{ route('projects.create')}}" class="btn btn-primary">New Project</a>

        <div class="row text-center text-black ">
            <div class="ca rd text-center  m-auto mb-5 mt-5 border-dark">
                <div class="card-body" href="">
                    <h5 class="card-title">{{$board->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $board->project_number}}</h6>
                    <p class="card-text">{{$board->name}}</p>
                    <a href="{{ route('projects.index',[$board->id])}}" class="btn btn-primary">View Your Projects</a>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
