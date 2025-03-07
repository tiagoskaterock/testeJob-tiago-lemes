<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->perfil != 'Dev' and Auth::user()->perfil != 'Admin') {
            session()->flash('error', 'Acesso restrito a administradores!');
            return redirect()->route('start');
        }
        return $next($request);
    }
}
