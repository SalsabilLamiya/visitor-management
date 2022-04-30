@extends('layouts.dashboard')
@section('content')

<div class="container - fluid">
    <div class="jumbotron-fluid bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-8">Add Gatemen</h1>
                    {{-- <p class="lead">Prison Management System</p> --}}
                </div>
                <div class="col-md-4">
                    <img src="/img/gateman.png" width="200" height="200" alt="gateman">
                </div>
            </div>
        </div>
    </div>


<div class="container">

    {{-- <h1>Add Visitors</h1> --}}


    <form class="well form-horizontal" action="{{ route('gatemans.create') }}" method="post" enctype="multipart/form-data">
        @csrf

            {{-- Name --}}
            <div class="form-group">
                <label class="col-md-4 control-label">Gateman Name</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i
                                class="glyphicon glyphicon-user"></i></span><input id="fullName" name="Name"
                            placeholder="Name" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            {{-- SSN --}}
            <div class="form-group">
                <label class="col-md-4 control-label">Contact Number</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i
                                class="glyphicon glyphicon-ban-circle"></i></span><input id="model" name="Contact_No"
                            placeholder="phone" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            {{-- Address --}}
            <div class="form-group">
                <label class="col-md-4 control-label">SSN</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i
                                class="glyphicon glyphicon-home"></i></span><input id="milage" name="SSN"
                            placeholder="address" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            {{-- date_in --}}
            <div class="form-group">
                <label class="col-md-4 control-label">Address</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i
                                class="glyphicon glyphicon-plus-sign"></i></span><input id="seat_number" name="Address"
                            placeholder="address" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>





        <div class="form-group">
      
            <div class="col-md-8 inputGroupContainer">
                <input type="file" name="image" class="form-control">
            </div>


        </div>

        <div class="row form-group">
            <div class="col-md-8">
                <button type="submit" class="btn btn-dark w-40 float-left">Add</button>
            </div>
        </div>



    </form>
    <div class="d-flex">
        {{-- <a href="/index.php">  <button type="button" class="btn btn-warning">HOME</button> </a> --}}

        {{-- <a href="/showVisitor">  <button type="button" class="btn btn-success">Show Visitors</button> </a> --}}
    </div>
</div>

@endsection















{{-- @extends('layouts.app')


@section('content')
    <div class="container - fluid">
        <div class="jumbotron-fluid bg-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-15">GATEMANS</h1>

                    </div>
                    <div class="col-md-6">
                        <img src="img/gateman.png" alt="gateman">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('gatemans.create')}}" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Name</label>
                            <input type="text" name="Name" class= "form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Contact_No</label>
                            <input type="text" name="Contact_No" class= "form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">SSN</label>
                            <input type="text" name="SSN" class= "form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="">Address</label>
                            <input type="text" name="Address" class= "form-control" required>
                        </div>
                    </div>
                    <div class="row foem-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info w-10 float: right">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Contact_No</th>
                        <th>SSN</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                    @foreach($gatemans as $gateman)
                    <tr>
                        <td>{{$gateman->Name}}</td>
                        <td>{{$gateman->Contact_No}}</td>
                        <td>{{$gateman->SSN}}</td>
                        <td>{{$gateman->Address}}</td>
                        <td>
                            <a href="{{route('gatemans.EditGateman',["gateman"=>$gateman])}}" class="btn btn-sm btn-dark">Edit</a>
                            <form class="d-inline" action="{{route('gatemans.delete',["gateman"=>$gateman])}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-warning">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
 --}}
