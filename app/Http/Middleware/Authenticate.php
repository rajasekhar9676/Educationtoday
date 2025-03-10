<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            // Redirect admins to admin login
            if ($request->is('admin_panel') || $request->is('admin_panel/*')) {
                return route('admin.login');
            }

            // Redirect normal users to default login page
            return route('login');
        }
    }
}
