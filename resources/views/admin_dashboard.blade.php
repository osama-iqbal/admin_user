@extends('master')
@section('content')
<div class='container'>
<div class='text-right mr-5 mb-3 mt-5'>
<a class='btn btn-primary' href="{{ url('/') }}">Log Out</a>
</div>
    <div class='card text-primary'>
        <h2><b>{{ Session::get('welcome') }}</b></h2>
    </div>
</div>
</div>
</div>
@endsection
