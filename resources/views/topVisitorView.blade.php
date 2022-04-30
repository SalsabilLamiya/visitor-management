@extends('layouts.dashboard')
@section('content')

<div class="container - fluid">
    <div class="jumbotron-fluid bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">TOP Visitors Record</h1>

                </div>
                <div class="col-md-6">
                    <img src="img/Visitor.png" width="200" height="200" alt="visitor">
                </div>
            </div>
        </div>
    </div>

<div class="div.container-fluid">
<div class="row">

    <div class="col-md-12">

    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Contact_No</th>
            <th>Email</th>
            <th>Address</th>
            <th>Total Number of Visits</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($visitor as $v)
        <tr>
            <td>{{$v->Name}}</td>
            <td>{{$v->Contact_No}}</td>
            <td>{{$v->Email}}</td>
            <td>{{$v->Address}}</td>
            <td>{{$v->count}}</td>

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





                {{-- @if ($v->status!="visiting")
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
             </td> --}}
         </tr>
        @endforeach
    </table>
 </div>
</div>

</div>


@endsection

