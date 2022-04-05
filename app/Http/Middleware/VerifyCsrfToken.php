<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'https://play3d-backend.herokuapp.com/api/register',
        'https://play3d-backend.herokuapp.com/api/login',
        'https://play3d-backend.herokuapp.com/api/reviews',
        'reviews/*',
        'users/*'
    ];
  
}
