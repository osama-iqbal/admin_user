@extends('master')
@section('content')
<div class='container card mt-5 '>
    <div class='text-center mt-5'>
        <h1 class='text-danger'><b>Log In</b></h1>
    </div>
    
    @if (Session::has('msg'))
        <div class="alert alert-info">{{ Session::get('msg') }}</div>
    @endif   
    
    
    <div>
        <form method='post' action='login'>
            @csrf
            <label class='mt-2'><b>Email</b></label>
            <input class="form-control" type="text" name="email" placeholder='Enter Your Email'>
            <label class='mt-2'><b>Password</b></label>
            <input class="form-control" type="password" name="password" placeholder='Enter Password'>
            <div class="form-group mt-2">
                <label for="my-select"><b>LogIn as:</b></label>
                <select id="my-select" class="form-control" name="role">
                <option>Select Your Role</option>    
                <option value='admin'>Admin</option>
                    <option value='user'>User</option>
                </select>
            </div>
            <div>
                <button type='submit' class='btn btn-primary'>Log In</button>
            </div>
        </form>
        <div class='mt-3'>
            <a class='text-primary' href="{{ url('/register') }}">Don't have an account? Register Here</a>
        </div>
    </div>
</div>

@endsection