<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Belum login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Role tidak sesuai
        if (Auth::user()->role !== $role) {

            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.beranda');
            }

            return redirect()->route('relawan.beranda');
        }

        return $next($request);
    }
}