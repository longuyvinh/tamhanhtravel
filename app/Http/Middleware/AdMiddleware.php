<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //die('bug admin');
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect(env('BACK_URL').'/login');
            }
        } else if(!in_array(Auth::guard($guard)->user()->role_id, [1,2,3,4])) {
            return redirect()->to('/error/permission')->withError('Permission Denied');
        }

        return $next($request);
    }
    /*
    public function handle($request, Closure $next)
    {
        die();

        // Test to see if the requesters have an ip address.
        if($request->ip() == null){
            throw new \Exception("IP ADDRESS NOT SET");
        }
        $country=file_get_contents('http://api.hostip.info/get_html.php?ip=' . $request->ip());
        echo $country;
        if(strpos($country, "UNITED STATES")){
           throw new \Exception("NOT FOR YOUR EYES, NSA");
        } else {
            return redirect("index");
        }

        return $next($request);
    }*/
}
