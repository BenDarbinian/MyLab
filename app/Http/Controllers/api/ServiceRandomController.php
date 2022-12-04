<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\SerivceResource;
use App\Models\Service;

class ServiceRandomController extends Controller
{
    public function  index(Request $request) {
        $request->validate([
            'number' => 'numeric|integer|min:1'
        ]);
        $n = $request -> number;
        return SerivceResource::collection(Service::inRandomOrder()->limit($n)->get());
    }
}
