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

/*     public function show($id){
        $service = Services::findOrFail($id);
        
        return view("services.show", ["service" => $service]);
    } */

    public function show(Services $service){
        return view("services.show", ["service" => $service]);
    }

    public function create(){
        return view("services.create");
    }

    public function store(Services $service){

       Services::create($this->validateArticle());
       return redirect(route("services.index"));
        /* return redirect("/services"); */
    }

    public function edit(Services $service){

        return view("services.edit", compact("service"));
    }

    public function update(Services $service){

        $service->update($this->validateArticle());

        return redirect("/services/" . $service->id);
    }

    public function validateArticle(){
        return request()->validate([
            "title" => "required"/* ["required", "min:3", "max:255"] */,
            "body" => "required"
        ]);
    }
}
