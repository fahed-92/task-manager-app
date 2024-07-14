@extends('Layouts.master')

@section('content')
    <div class="container-fluid border-dark">
        <div class="container border-dark mt-auto mr-1 ml-1 mt-4 mb-4 ">
            <div class="row">
                <div class="col-8">
                        <div class="card mt-3 mb-3">
                            <div id="tasks" class="card-header">
                                <h2  class="text-center text-black-50">
                                    Tasks
                                </h2>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="text-center text-black-50">
                                            Task Name
                                        </h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Default checkbox
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Default checkbox
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Default checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-4"><div class="card mt-3 mb-3">
                        <div class="card-header">
                            <h2 class="text-center text-black-50">
                                Tasks Details
                            </h2>
                        </div>
                        <div class="card-body">
                            <label for="customRange2" class="form-label">Task To :</label>
                        </div>
                        <div class="card-body">
                            <label for="customRange2" class="form-label">Completed :</label>
                            <input type="range" class="form-range" min="0" max="100" id="customRange2" value="2">
                        </div>
                        <div class="card-body">
                            <label for="customRange2" class="form-label">Deadline :</label>
                            <button type="buttom" class="btn btn-danger" id="deadline" name="deadline" >Deadline</button>
                        </div>
                        <div class="card-body">
                            <label for="customRange2" class="form-label">Description :</label>
                            <h4 class="text-black-50"> askkskksksk </h4>
                        </div>
                        <div class="card-body">
                            <label for="customRange2" class="form-label">attachments :</label>
                            <img src="{{asset('images/about-img.png')}}" class="rounded float-start" alt="...">
                            <h4 class="text-black-50">descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions </h4>
                            <img src="{{asset('images/about-img.png')}}" class="rounded float-start" alt="...">
                                <h4 class="text-black-50">descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions </h4>
                            <img src="{{asset('images/about-img.png')}}" class="rounded float-start" alt="...">
                                <h4>descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions </h4>
                            <img src="{{asset('images/about-img.png')}}" class="rounded float-start" alt="...">
                                <h4 class="text-black-50">descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions </h4>
                            <img src="{{asset('images/about-img.png')}}" class="rounded float-start" alt="...">
                                <h4 class="text-black-50">descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions descriptions </h4>
                        </div>
                    </div></div>
            </div>
        </div>
    </div>
    <script>
        // $(document).ready(function(){
        var s=$('#tasks').load(route('board'),200 , data);
        console.log('data');

        // });
    </script>
@stop

