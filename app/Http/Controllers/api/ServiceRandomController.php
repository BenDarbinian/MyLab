<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SerivceResource;
use App\Models\Service;

class ServiceRandomController extends Controller
{
    public function  index() {
        return SerivceResource::collection(Service::inRandomOrder()->limit(5)->get());
    }
}
