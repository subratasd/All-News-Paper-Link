@extends('backpage.leyout.main')
@section('title', 'Bangla FM Radio')
@section('content')

<div class="row">

    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">@yield('title')</h4>
                <p class="card-category">Add now</p>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Link</label>
                                <input type="text" name="link" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Start Date</label>
                                <input type="text" name="start_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">End Date</label>
                                <input type="text" name="end_date" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Sl</label>
                                <input type="text" name="sl" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    <div class="clearfix"></div>

            </div>


        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-profile">

            <div class="card-body">
                <img src="{{asset('frontend/img/prothomalo.png')}}" width="100%" class="mb-5">


                <input type="file" name="photo" id="photo" class="btn btn-primary btn-round" onchange="previewFile()" required>
            </div>
        </div>
        </form>
    </div>
</div>



<div class="row">

    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> @yield('title')</h4>
                <p class="card-category"> </p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                        <tr><th>
                                ID
                            </th>
                            <th>
                                Sl
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Start Date
                            </th>
                            <th>
                                End Date
                            </th>
                            <th>
                                Action
                            </th>
                        </tr></thead>
                        <tbody>
                        @foreach($all_data as  $data)
                            <tr>

                            <td>
                                {{$data->id}}
                            </td>
                            <td>
                                {{$data->sl}}
                            </td>
                            <td>
                                {{$data->name}}
                            </td>
                            <td>
                                <img src="{{asset('images/'.$data->image)}}" width="150px" height="70px" >
                            </td>
                            <td>
                                {{$data->start_date}}
                            </td>
                            <td>
                                {{$data->end_date}}
                            </td>
                            <td>
                                <a href="" class="btn btn-facebook">Edit</a>

                                <a href="banglafm/{{$data->id}}" type="submit" class="btn btn-danger">Delete</a>

                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

 <script>

     function previewFile() {
         var preview = document.querySelector('img');
         var file    = document.querySelector('input[type=file]').files[0];
         var reader  = new FileReader();

         reader.onloadend = function () {
             preview.src = reader.result;
         }

         if (file) {
             preview.src = "";
             reader.readAsDataURL(file);
         } else {
             preview.src = "";
         }
     }
 </script>

@endsection
