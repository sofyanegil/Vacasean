@extends('dashboard.layouts.main') @section('container')
<div
    class="
        d-flex
        justify-content-between
        flex-wrap flex-md-nowrap
        align-items-center
        pt-3
        pb-2
        mb-3
        border-bottom
    "
>
    <h1 class="h2">Edit Story</h1>
</div>

<div class="col-lg-8">
    <form
        method="post"
        action="/dashboard/stories/{{ $story->slug }}"
        class="mb-5"
        enctype="multipart/form-data"
    >
        @method('put') @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type=" text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{old('title',$story->title) }}"
                autofocus
            />
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input
                type="text"
                class="form-control @error('slug') is-invalid @enderror"
                id="slug"
                name="slug"
                value="{{ old('slug', $story->slug)}}"
            />
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="places" class="form-label">Places</label>
            <select class="form-select" name="places_id" id="places">
                <option disabled selected class="bg-light">
                    ---Select Places---
                </option>
                @foreach ($places as $place) @if ( $place->id ==
                old('places_id', $story->places_id))
                <option value="{{ $place->id }}" selected>
                    {{ $place->name }}
                </option>
                @else
                <option value="{{ $place->id }}">
                    {{ $place->name }}
                </option>
                @endif @endforeach
                <option disabled class="bg-light">
                    Add New Category ? Contact Admin
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="hidden" name="oldImage" value="{{ $story->image }}" />
            @if ($story->image)
            <img
                src="{{ asset('storage/'. $story->image) }}"
                class="img-preview img-fluid my-3 col-sm-5 d-block"
            />
            @else
            <img class="img-preview img-fluid my-3 col-sm-5" />
            @endif
            <input
                class="form-control @error('image') is-invalid @enderror"
                type="file"
                id="image"
                name="image"
                onchange="previewImage()"
            />
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input
                id="body"
                type="hidden"
                name="body"
                value="{{ old('body', $story->body) }}"
            />
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary d-block mx-auto">
            <span data-feather="save"></span> Update Post
        </button>
    </form>
</div>

<script>
    // Slug
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("change", function () {
        fetch("/dashboard/stories/checkSlug?title=" + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });

    // Trix Editor
    document.addEventListener("trix-file-accept", function (e) {
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector("#image");
        const imgPreview = document.querySelector(".img-preview");

        imgPreview.style.display = "block";

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }
</script>

@endsection
