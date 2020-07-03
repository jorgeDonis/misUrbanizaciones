<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residence;
use App\Http\Resources\Residence as ResidenceResource;

class ResidenceController extends Controller
{
    //GET method. Returns json with all residences in DB
    public function getAllResidences()
    {
        return ResidenceResource::collection(Residence::all());
    }
}
