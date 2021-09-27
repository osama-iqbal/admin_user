<?php

namespace App\Listeners;

use App\Events\welcome;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Session;
class welcomeListner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  welcome  $event
     * @return void
     */
    public function handle(welcome $event)
    {
        Session::flash('welcome',$event->welcome);
        return redirect('/'.$event->welcome);
    }
}
