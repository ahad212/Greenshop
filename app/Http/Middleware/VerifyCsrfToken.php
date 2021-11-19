<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/laraecomm/admin/login/token',
        '/laraecomm/subadmin/login/token',
        '/laraecomm/seller/login/token',
        '/laraecomm/user/create',
        '/laraecomm/user/login',
        '/laraecomm/v1/insert_address'
    ];
}
