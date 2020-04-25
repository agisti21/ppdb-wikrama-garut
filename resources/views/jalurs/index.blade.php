
@extends('layouts')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jalurs.create') }}"> Create</a>
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
          
            <th>jalur</th>
          
            <th width="280px">Action</th>
        </tr>
        @foreach ($jalurs as $jalur)
        <tr>
            <td>{{ $jalur-> jalur}}</td>
          
        </tr>
        @endforeach
    </table>
    <a href="home">Home</a>
   
@endsection