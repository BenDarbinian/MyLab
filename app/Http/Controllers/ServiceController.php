<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Resources\SerivceResource;

class ServiceController extends Controller
{
    public function index() {
        return SerivceResource::collection(Service::all());
    }
}
