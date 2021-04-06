@extends("layout")

@section("content")

    <div class="container py-5 mt-5">
        @foreach($services as $service)
            <div class="content">
                <h2>
                    <a href="/services/{{ $service->id}}">{{ $service->title }}</a>
                </h2>
                <p>{{ $service->body }}</p>
            </div>
            <!-- {!! $service->body !!} -->
        @endforeach
    </div>
@endsection