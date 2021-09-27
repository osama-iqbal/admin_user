@extends('master')
@section('content')
<div class='container card mt-5 '>
    <div class='text-center mt-5'>
        <h1 class='text-danger'><b>Sign Up</b></h1>
    </div>
    <div>
        <form method='post' action='sign_up'>
            @csrf
            <label class='mt-2'><b>Email</b></label>
            <input class="form-control" type="text" name="email" placeholder='Enter Your Email'>
            <label class='mt-2'><b>Password</b></label>
            <input class="form-control" type="password" name="password" placeholder='Enter Your Password'>
            <div class="form-group mt-2">
                <label for="my-select"><b>LogIn as:</b></label>
                <select id="my-select" class="form-control" name="role">
                    <option value='admin'>Admin</option>
                    <option value='user'>User</option>
                </select>
            </div>
            <div>
                <button type='submit' class='btn btn-primary'>Sign Up</button>
            </div>
        </form>
        <div class='mt-3'>
            <a class='text-primary' href="{{ url('/') }}">Already have an account? LogIn Here</a>
        </div>
    </div>
</div>

@endsection