@extends("layout")

@section("content")
    <div class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
            <div style="height: 200px;"></div>
    </div>

    <div class="container py-5">
        <h1> {{ $service->title }} </h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            {{ $service->body }}
    </div>

@endsection