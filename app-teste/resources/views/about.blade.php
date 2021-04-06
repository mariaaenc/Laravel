@extends("layout")

@section("content")
    <div class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
            <div style="height: 200px;"></div>
    </div>

    <div class="container py-5">
        <h1>Section Heading</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
    </div>

    <div class="container py-5">
        <ul>
            @foreach($services as $service)
                <li>
                    <h3><a href="/services/{{ $service->id }}">{{  $service->title }}</a></h3>
                    <p> {{ $service->body }}</p>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
        <div style="height: 200px;"></div>
    </div>
@endsection