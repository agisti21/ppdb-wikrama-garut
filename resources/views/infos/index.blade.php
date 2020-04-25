
@extends('layouts')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('infos.create') }}"> Create</a>
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
          
            <th>info</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($infos as $info)
        <tr>
            <td>{{ $info-> info}}</td>
          
        </tr>
        @endforeach
    </table>
    <a href="home">Home</a>
   
@endsection