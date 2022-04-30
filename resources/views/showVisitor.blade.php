@extends('layouts.dashboard')
@section('content')

<div class="container - fluid">
    <div class="jumbotron-fluid bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Visitors Record</h1>
                    {{-- <p class="lead">A WEB APPLICATION THAT ADD VISITORS</p> --}}
                </div>
                <div class="col-md-6">
                    <img src="img/Visitor.png" width="200" height="200" alt="visitor">
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
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" method="GET" action="{{ route('search') }}">
              <input class="form-control mr-sm-2" type="search" placeholder="Search by number or email" aria-label="Search" name="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>

          @if($visitors->isNotEmpty())
    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Contact_No</th>
            <th>Email</th>
            <th>Address</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($visitors as $v)
        <tr>
            <td>{{$v->Name}}</td>
            <td>{{$v->Contact_No}}</td>
            <td>{{$v->Email}}</td>
            <td>{{$v->Address}}</td>

            @if ($v->status=="visiting")
            <td><div class="badge badge-success text-wrap" style="width: 6rem;">
                {{ $v->status }}
              </div>
                </td>
            @else
            <td><div class="badge badge-danger text-wrap" style="width: 6rem;">
                {{ $v->status }}
              </div>
                </td>
            @endif





                @if ($v->status!="visiting")
                <td>
                    <a href="{{route('visitor.history',$v->id)}}" class="btn btn-sm btn-dark">Add Visiting</a>
                 </td>
                @endif
               
            <td>
                <a href="{{route('visitors.edit',["visitor"=>$v])}}" class="btn btn-sm btn-dark">Edit</a>
             </td>

             <td>
                <form class="d-inline" action="{{route('visitors.delete',["visitor"=>$v])}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-warning">Delete</button>
                </form>
             </td>
         </tr>
        @endforeach
    </table>
    @else 
    <div>
        <h1>No Visitors Found found</h1>
    </div>
@endif
 </div>
</div>

</div>


@endsection

