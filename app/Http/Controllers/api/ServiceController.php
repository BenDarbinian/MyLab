<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Resources\SerivceResource;

class ServiceController extends Controller
{
    public function  index() {
        return SerivceResource::collection(Service::all());
    }
}
