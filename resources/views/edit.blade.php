@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route("visitors.update",["visitor"=>$visitor])}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Name</label>
                            <input type="text" name="Name" class= "form-control" value="{{$visitor->Name}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Contact_No</label>
                            <input type="text" name="Contact_No" class= "form-control" value="{{$visitor->Contact_No}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Email</label>
                            <input type="text" name="Email" class= "form-control" value="{{$visitor->Email}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Address</label>
                            <input type="text" name="Address" class= "form-control" value="{{$visitor->Address}}">
                        </div>
                    </div>
                    <div class="row foem-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info w-100 ">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
