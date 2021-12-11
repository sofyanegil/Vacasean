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
    <h1 class="h2">Edit Place</h1>
</div>

<div class="col-lg-8 col-sm-6">
    <form
        method="post"
        action="/dashboard/places/{{ $place->slug }}"
        class="mb-5"
        enctype="multipart/form-data"
    >
        @method('put') @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type=" text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{old('name',$place->name) }}"
                autofocus
            />
            @error('name')
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
                value="{{old('slug',$place->slug) }}"
            />
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input
                type="text"
                class="form-control @error('city') is-invalid @enderror"
                id="city"
                name="city"
                value="{{ old('city',$place->city) }}"
            />
            @error('city')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="country_id" class="form-label">Country</label>
            <select
                class="form-select @error('country_id') is-invalid @enderror"
                name="country_id"
                id="places"
            >
                <option disabled selected class="bg-light">
                    ---Select Country---
                </option>
                @foreach ($countries as $country) @if ( $country->id ==
                old('country_id', $place->country_id ))
                <option value="{{ $country->id }}" selected>
                    {{ $country->name_country}}
                </option>
                @else
                <option value="{{ $country->id }}">
                    {{ $country->name_country }}
                </option>
                @endif @endforeach
            </select>
            @error('places_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="bujur" class="form-label">Bujur</label>
            <input
                type="text"
                class="form-control @error('bujur') is-invalid @enderror"
                id="bujur"
                name="bujur"
                value="{{ old('bujur', $place->bujur) }}"
            />
            @error('bujur')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="lintang" class="form-label">Lintang</label>
            <input
                type="text"
                class="form-control @error('lintang') is-invalid @enderror"
                id="lintang"
                name="lintang"
                value="{{ old('lintang', $place->lintang) }}"
            />
            @error('lintang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="hidden" name="oldImage" value="{{ $place->image }}" />
            @if ($place->image)
            <img
                src="{{ asset('storage/'. $place->image) }}"
                class="img-preview img-fluid my-3 col-sm-5 d-block"
            />
            @else
            <img class="img-preview img-fluid my-3 col-sm-5" />
            @endif
            <input
                class="form-control @error ('image') is-invalid @enderror"
                type="file"
                id="image"
                name="image"
                onchange="previewImage()"
                value="{{ old('image', $place->image) }}"
            />
            <img class="img-preview img-fluid my-3 col-sm-5" />
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="about" class="form-label">About</label>
            <input
                id="about"
                type="hidden"
                name="about"
                value="{{ old('about', $place->about) }}"
            />
            @error('about')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <trix-editor input="about"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary d-block mx-auto">
            <span data-feather="edit-2"></span> Update Place
        </button>
    </form>
</div>

<script>
    // Slug
    const title = document.querySelector("#name");
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

    // Preview Image
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
