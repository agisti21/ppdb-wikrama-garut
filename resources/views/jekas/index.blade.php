
@extends('layouts')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jekas.create') }}"> Create</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
          
            <th>Jk</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($jekas as $jeka)
        <tr>
            <td>{{ $jeka-> jk}}</td>
          
            <td>
                <form action="{{ route('jekas.destroy',$jeka->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('jekas.show',$jeka->id) }}">Show</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="home">Home</a>
   
@endsection