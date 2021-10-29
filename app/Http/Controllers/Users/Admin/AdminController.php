<?php

namespace App\Http\Controllers\barangs\Admin;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}
