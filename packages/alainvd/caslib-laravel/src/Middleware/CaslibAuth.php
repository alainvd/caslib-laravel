<?php

namespace Alainvd\Caslib\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CaslibAuth
{

    protected $auth;
    protected $caslib;


    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->caslib = app('caslib');
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        dd($this->caslib);
        dd('caslib middleware');

//        if ($this->cas->checkAuthentication()) {
//            // Store the user credentials in a Laravel managed session
//            session()->put('cas_user', $this->cas->user());
//        } else {
//            if ($request->ajax() || $request->wantsJson()) {
//                return response('Unauthorized.', 401);
//            }
//            $this->cas->authenticate();
//        }

        return $next($request);
    }

}
