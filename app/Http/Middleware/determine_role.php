<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AuthModel;
use Session;
use Event;
use Notification;
use App\Events\welcome;
use App\Notifications\login_success;    
class determine_role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = AuthModel:: where('email','=',$request->email)->first();
        if ($user)
        {
        if($request->role == $user->role) {
            if($request->password == $user->password)
           {
               Event:: dispatch(new welcome('Welcome '.$user->role));
                return redirect('/'.$request->role);
            }   
        else{
            Session::flash('msg', "Password Invalid");
            return redirect('/');
        }
        }else{
            Session::flash('msg', "Emial not exist");
            return redirect('/');
        }
            
        }
           return $next($request);
}
}
