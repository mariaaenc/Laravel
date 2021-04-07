<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Tag;

class ServicesController extends Controller
{
    public function index(){

        if(request("tag")){
            $services = Tag::where("name", request("tag"))->firstOrFail()->services;
        }
        else{
            $services = Services::latest()->get();
        }
        
        return view("services.index", ["services" => $services]);
    }

/*     public function show($id){
        $service = Services::findOrFail($id);
        
        return view("services.show", ["service" => $service]);
    } */

    public function show(Services $service){
        return view("services.show", ["service" => $service]);
    }

    public function create(){
        return view("services.create", [
            "tags" => Tag::all()
        ]);
    }

    public function store(){
       $this->validateService();
       $service = new Services(request(["title", "body"]));
       $service->user_id = 1;
       $service->save();

       $service->tags()->attach(request("tags")); //attach = anexa 
       /* Services::create($this->validateService()); */
       return redirect(route("services.index"));
        /* return redirect("/services"); */
    }

    public function edit(Services $service){

        return view("services.edit", compact("service"));
    }

    public function update(Services $service){

        $service->update($this->validateService());

        return redirect("/services/" . $service->id);
    }

    public function validateService(){
        return request()->validate([
            "title" => "required"/* ["required", "min:3", "max:255"] */,
            "body" => "required",
            "tags" => "exists:tags,id"
        ]);
    }
}
