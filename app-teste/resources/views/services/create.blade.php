@extends("layout")
@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
@endsection

@section("content")
    <div class="container py-3 mt-5">
        <h1>New Service</h1>
    </div>
    <form method="post" action="/services" class="container py-5">
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input class="input @error('title') is-danger @enderror" type="text"  name="title" id="title">
                @error('title')
                    <p class="help is-danger">{{ $errors->first("title") }}</p>
                @enderror
                {{-- @if ($errors->has("title"))
                <p class="help is-danger">{{ $errors->first("title") }}</p>
                @endif --}}
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>

            <div class="control">
                <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body"></textarea>
                @error('body')
                    <p class="help is-danger">{{ $errors->first("body") }}</p>
                @enderror
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Tags</label>

            <div class="select is-multiple control">
                <select name="tags[]" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                    @endforeach
                </select>
                @error('tags')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
    </form>

@endsection