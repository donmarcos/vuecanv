<?php

namespace App\Http\Controllers\Api;

use App\Vgeocoding;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VgeocodingResource;

class VotersController extends Controller
{
    //
    //
    public function index()
    {
        return "all";
    }


    public function getAll()
    {
        $voters = Vgeocoding::get();

        return VgeocodingResource::collection($voters);
    }
    //
}
