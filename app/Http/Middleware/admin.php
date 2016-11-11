<?php

namespace CCONLINE\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
use Closure;

class admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->tipo != 'admin')
        {
            Session::flash('message-error', 'Sin privilegios');
            return redirect()->to('admin');
        }
        return $next($request);
    }
}
