@extends('Layouts.master')

@section('content')

    <div class="container">
        <h1>Add New Projects</h1>

        <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
            </div>

            <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Description" required=""></textarea>
            </div>

            <div class="form-group">
                <strong>Expected Duration:</strong>
                <input type="date" name="exp_duration" class="form-control" placeholder="exp_duration" required="">
            </div>

            <div class="form-group">
                <strong>Cost:</strong>
                <input type="number" name="cost" class="form-control" placeholder="Cost" required="">
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>

        </form>
    </div>

@stop
{{--<script type="text/javascript">--}}

{{--    // $.ajaxSetup({--}}
{{--    //     headers: {--}}
{{--    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--    //     }--}}
{{--    // });--}}

{{--    $(".btn-submit").click(function(e){--}}

{{--        e.preventDefault();--}}

{{--        var name = $("input[name=name]").val();--}}
{{--        var description = $("input[name=description]").val();--}}
{{--        var exp_duration = $("input[name=exp_duration]").val();--}}
{{--        var cost = $("input[name=cost]").val();--}}

{{--        $.ajax({--}}
{{--            type:'POST',--}}
{{--            url:"{{ route('projects.store') }}",--}}
{{--            data:{name:name, description:description, exp_duration:exp_duration , cost:cost},--}}
{{--            success:function(data){--}}
{{--                alert(data.success);--}}
{{--            }--}}
{{--        });--}}

{{--    });--}}
{{--</script>--}}

