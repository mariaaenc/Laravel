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

    public function create(){
        return view("services.create");
    }

    public function store(){

        request()->validate([
            "title" => "required"/* ["required", "min:3", "max:255"] */,
            "body" => "required"
        ]);

        $service = new Services();
        $service->title = request("title");
        $service->body = request("body");
        $service->save();

        return redirect("/services");
    }

    public function edit($id){
        $service = Services::find($id);

        return view("services.edit", compact("service"));
    }

    public function update($id){

        request()->validate([
            "title" => "required"/* ["required", "min:3", "max:255"] */,
            "body" => "required"
        ]);
        
        $service = Services::find($id);

        $service->title = request("title");
        $service->body = request("body");

        $service->save();

        return redirect("/services/" . $service->id);
    }
}
