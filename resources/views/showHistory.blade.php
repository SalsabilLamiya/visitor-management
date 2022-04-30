@extends('layouts.dashboard')
@section('content')

<div class="container - fluid">
    <div class="jumbotron-fluid bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-4">Visitors History Record</h1>
 
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
            <th>Arrival Time</th>
            <th>Leaving Time</th>
            <th>Gateman</th>
            <th>status</th>
        </tr>
        @foreach($visitors as $v)
        <tr>
            <td>{{$v->visitor_name}}</td>
            <td>{{$v->visitor_phone}}</td>
            <td>{{$v->visitor_email}}</td>
            <td>{{$v->arrival_time}}</td>
            <td>{{$v->leaving_time}}</td>
            <td>{{$v->gateman_name}}</td>

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

                @if ($v->status=="visiting")

                <td>
                    <a href="{{route('visitor.leavingHistory',$v->id)}}" class="btn btn-sm btn-warning">Visitor leave</a>
                    
                 </td>
                @endif
               



         </tr>
        @endforeach
    </table>
 </div>
</div>

</div>


@endsection

