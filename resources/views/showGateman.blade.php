@extends('layouts.dashboard')
@section('content')

<div class="container - fluid">
    <div class="jumbotron-fluid bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Gatemans  Record</h1>
                    {{-- <p class="lead">A WEB APPLICATION THAT ADD VISITORS</p> --}}
                </div>
                <div class="col-md-6">
                    <img src="img/gateman.png" width="200" height="200" alt="gateman">
                </div>
            </div>
        </div>
    </div>


{{-- <div>
    <a href="add">  <button type="button" class="btn btn-warning">ADD</button> </a>
</div> --}}
<div class="div.container-fluid">
<div class="row">
    {{-- <div class="col-md-6">
       <form action="{{ route('Prisoner.create') }}" method="post">
            @csrf
        <div class="row from-group">
            <div class="col-md-12">
                <label for="">Name:</label>
                <input type="text" name="name" class="form-control" required >
            </div>
         </div>
         <div class="row from-group">
            <div class="col-md-12">
                <label for="">ssn:</label>
                <input type="text" name="ssn" class="form-control" required >
            </div>
         </div>
         <div class="row from-group">
            <div class="col-md-12">
                <label for="">address:</label>
                <input type="text" name="address" class="form-control" required >
            </div>
         </div>
         <div class="row from-group">
            <div class="col-md-12">
                <label for="">dateIn:</label>
                <input type="date" name="date_in" class="form-control" required >
            </div>
         </div>
         <div class="row from-group">
            <div class="col-md-12">
                <label for="">age:</label>
                <input type="text" name="age" class="form-control" required >
            </div>
         </div>
         <div class="row from-group">
            <div class="col-md-12">
                <label for="">gender:</label>
                <input type="text" name="gender" class="form-control" required >
            </div>
         </div>
         <div class="row from-group">
             <div class="col-md-12">
                 <button type="submit" class="btn btn-success">Create</button>

             </div>
         </div>
       </form>
    </div> --}}
    <div class="col-md-12">

    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Contact_No</th>
            <th>SSN</th>

            <th>Address</th>
            <th>Picture</th>
            <th></th>
        </tr>
        @foreach($gatemans as $v)
        <tr>
            <td>{{$v->Name}}</td>
            <td>{{$v->Contact_No}}</td>
            <td>{{$v->SSN}}</td>
            {{-- <td>{{$v->Email}}</td> --}}
            <td>{{$v->Address}}</td>
            <td>
                <div class="text-center">
                  <img src="/storage/uploads/{{ $v->picture }}" style="height: 100px; width: auto" />
                </div>
              </td>
            <td>
                <a href="{{route('gatemans.EditGateman',["gateman"=>$v])}}" class="btn btn-sm btn-dark">Edit</a>
             </td>
             <td>
                <form class="d-inline" action="{{route('gatemans.delete',["gateman"=>$v])}}" method="post">
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



@endsection
