@extends('layouts.dashboard')


@section('content')
    <div class="container - fluid">
        <div class="jumbotron-fluid bg-info">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-md-6">
                        <h1 class="display-15">VISITORS</h1>
                        <p class="lead">A WEB APPLICATION THAT ADD VISITORS</p>
                    </div>
                    <div class="col-md-6">
                        <img src="img/Visitor.png" alt="visitor">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('visitors.create')}}" method="post">
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
                            <label for="">Email</label>
                            <input type="text" name="Email" class= "form-control" required>
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
            </div> --}}
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Contact_No</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                    @foreach($visitors as $visitor)
                    <tr>
                        <td>{{$visitor->Name}}</td>
                        <td>{{$visitor->Contact_No}}</td>
                        <td>{{$visitor->Email}}</td>
                        <td>{{$visitor->Address}}</td>
                        <td>
                            <a href="{{route('visitors.edit',["visitor"=>$visitor])}}" class="btn btn-sm btn-dark">Editing</a>
                          
                            <td>
                                <form class="d-inline" action="{{route('visitors.delete',["visitor"=>$visitor])}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-warning">Delete</button>
                                </form>
                            </td>
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection


