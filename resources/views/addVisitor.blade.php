@extends('layouts.dashboard')
@section('content')

<div class="container - fluid">
    <div class="jumbotron-fluid bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Add Visitors</h1>
                    {{-- <p class="lead">Prison Management System</p> --}}
                </div>
                <div class="col-md-4">
                    <img src="/img/Visitor.png" width="200" height="200" alt="addVisitor">
                </div>
            </div>
        </div>
    </div>


<div class="container">

    {{-- <h1>Add Visitors</h1> --}}


    <form class="well form-horizontal" action="{{ route('visitors.create') }}" method="post">
        @csrf

            {{-- Name --}}
            <div class="form-group">
                <label class="col-md-4 control-label">Visitor Name</label>
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
                <label class="col-md-4 control-label">Email</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i
                                class="glyphicon glyphicon-home"></i></span><input id="milage" name="Email"
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



        <div class="row form-group">
            <div class="col-md-6">
                <button type="submit" class="btn btn-dark w-40 float-middle">Add</button>
            </div>
        </div>



    </form>
    <div class="d-flex">
        {{-- <a href="/index.php">  <button type="button" class="btn btn-warning">HOME</button> </a> --}}

        {{-- <a href="/showVisitor">  <button type="button" class="btn btn-success">Show Visitors</button> </a> --}}
    </div>
</div>

@endsection
