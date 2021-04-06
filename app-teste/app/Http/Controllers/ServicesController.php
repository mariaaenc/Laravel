<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index(){
        $services = Services::latest()->get();
        return view("services.index", ["services" => $services]);
    }

    public function show($id){
        $service = Services::find($id);
        return view("services.show", ["service" => $service]);
    }
}
