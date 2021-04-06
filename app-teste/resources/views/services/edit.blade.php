@extends("layout")
@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
@endsection

@section("content")
    <div class="container py-3 mt-5">
        <h1>Update Service</h1>
    </div>

    <form method="POST" action="/services/{{ $service->id }}" class="container py-5">
        @csrf
        @method("PUT")
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input class="input" type="text"  name="title" id="title" value="{{ $service->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <textarea class="textarea" name="body" id="body" >{{ $service->body }}</textarea>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection