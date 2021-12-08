@extends('layouts.main') @section('main')

<div class="container">
    <h1 class="mb-3 text-center">Vacation Places in ASEAN Countries</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Search.."
                    name="search"
                    value="{{ request('search') }}"
                />
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </div>
    <!-- Hero -->
    <div class="row">
        <div class="col-md-12 mb-4 mx-auto text-center">
            <div class="card shadow">
                <img
                    src="https://source.unsplash.com/600x300?{{ $places[0]->name }}"
                    style="object-fit: cover; max-height: 300px"
                    class="card-img-top"
                    alt="{{ $places[0]->name }}"
                />
                <div class="card-body bg-light">
                    <h4 class="card-text">{{ $places[0]->name }}</h4>
                    <p>
                        {{ $places[0]->city }},
                        {{ $places[0]->country->name_country }}
                        <img
                            src="https://flagcdn.com/24x18/{{ $places[0]->country->slug }}.png"
                            srcset="
                                https://flagcdn.com/48x36/{{ $places[0]->country->slug }}.png 2x,
                                https://flagcdn.com/72x54/{{ $places[0]->country->slug }}.png 3x
                            "
                            width="24"
                            height="18"
                            alt="Filipina"
                        />
                    </p>
                    <a
                        href="/places/{{ $places[0]->slug }}"
                        class="btn btn-success w-100"
                    >
                        <i class="bi-compass"></i> Explore Now!
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Thumbnail -->
    <div class="row mt-4" id="indonesia">
        <!-- <h4 class="mb-3">
            <img
                src="https://flagcdn.com/24x18/id.png"
                srcset="
                    https://flagcdn.com/48x36/id.png 2x,
                    https://flagcdn.com/72x54/id.png 3x
                "
                width="24"
                height="18"
                alt="Indonesia"
            />
            Indonesia
            <img
                src="https://flagcdn.com/24x18/id.png"
                srcset="
                    https://flagcdn.com/48x36/id.png 2x,
                    https://flagcdn.com/72x54/id.png 3x
                "
                width="24"
                height="18"
                alt="Indonesia"
            />
        </h4> -->
        @foreach ($places->skip(1) as $place)
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <img
                    src="https://source.unsplash.com/600x300?{{ $place->name }}"
                    style="object-fit: cover"
                    class="card-img-top"
                    alt="{{ $place->name }}"
                />
                <div class="card-body bg-light">
                    <h4 class="card-text">{{ $place->name }}</h4>
                    <p>
                        {{ $place->city }}, {{ $place->country->name_country }}
                        <img
                            src="https://flagcdn.com/24x18/{{ $place->country->slug }}.png"
                            srcset="
                                https://flagcdn.com/48x36/{{ $place->country->slug }}.png 2x,
                                https://flagcdn.com/72x54/{{ $place->country->slug }}.png 3x
                            "
                            width="24"
                            height="18"
                            alt="Filipina"
                        />
                    </p>
                    <a
                        href="/places/{{ $place->slug }}"
                        class="btn btn-success w-100"
                    >
                        <i class="bi-compass"></i> Explore Now!
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="p-5 container d-flex justify-content-center">
    {{ $places->links() }}
</div>
@endsection
