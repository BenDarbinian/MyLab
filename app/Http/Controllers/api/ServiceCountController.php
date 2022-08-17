<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;


class ServiceCountController extends Controller
{
    public function  store() {
        return Service::count();
    }
}
