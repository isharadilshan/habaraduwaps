<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('service');
    }

    public function index()
    {
        return view('service.service');
    }
}
