@extends('layouts.main') @section('main')

<h1 class="mb-3 text-center">
    <img
        src="https://flagcdn.com/24x18/{{ $country->slug }}.png"
        srcset="
                                https://flagcdn.com/48x36/{{ $country->slug }}.png 2x,
                                https://flagcdn.com/72x54/{{ $country->slug }}.png 3x
                            "
        width="24"
        height="18"
    />
    {{ $title }}
    <img
        src="https://flagcdn.com/24x18/{{ $country->slug }}.png"
        srcset="
                                https://flagcdn.com/48x36/{{ $country->slug }}.png 2x,
                                https://flagcdn.com/72x54/{{ $country->slug }}.png 3x
                            "
        width="24"
        height="18"
    />
</h1>
<div class="container">
    @if ($places->count())
    <!-- Hero -->
    <div class="row">
        <div class="col-md-8 mb-4 mx-auto text-center">
            <div class="card shadow">
                @if ($places[0]->image)
                <img
                    src="{{ asset('storage/' . $places[0]->image) }}"
                    class="
                        d-flex
                        justify-content-center
                        img-fluid
                        mx-auto
                        w-100
                    "
                    style="object-fit: cover; max-height: 30vh"
                />
                @else
                <img
                    src="https://source.unsplash.com/600x300?{{ $places[0]->name }}"
                    class="
                        d-flex
                        justify-content-center
                        img-fluid
                        mx-auto
                        w-100
                    "
                    style="object-fit: cover; max-height: 30vh"
                />
                @endif
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
    <div class="row mt-4">
        @foreach ($places->skip(1) as $place)
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                @if($place->image)
                <img
                    src="{{ asset('storage/' . $place->image) }}"
                    style="object-fit: cover"
                    class="card-img-top"
                />
                @else
                <img
                    src="https://source.unsplash.com/600x300?{{ $place->name }}"
                    style="object-fit: cover"
                    class="card-img-top"
                />
                @endif
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
    @else
    {{-- No Place --}}
    <div
        class="
            alert alert-warning
            col-sm-6
            mx-auto
            align-items-center
            h-100
            d-flex
        "
        role="alert"
    >
        <h1 class="text-center fs-1 flex-fill fs-3 align-self-auto">
            No Place Found
        </h1>
    </div>
    @endif
</div>
<div class="p-5 container d-flex justify-content-center">
    {{ $places->links() }}
</div>
@endsection
