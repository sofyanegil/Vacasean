@extends('layouts.main') @section('main')
<div class="row mt-3 p-2">
    <div class="col-md-6 col-sm-12 p-2">
        <img
            src="https://source.unsplash.com/600x300?Merapi"
            class="rounded col-sm-12 img-fluid"
            style="object-fit: cover"
        />
    </div>
    <div class="col-md-6 col-sm-12 p-3">
        <h2 class="mb-5 mb-sm-0">
            Take a rest from your job for travel around and chilling.
        </h2>
        <h6 class="mt-4 col-12 mb-sm-0 mt-sm-1">
            Travel around sout east asia with view and best experience. We
            provide any request you need for enjoy the holiday make your own
            best experience.
        </h6>
        <a href="/places" class="btn btn-primary mt-5 mb-3">
            Explore the Place
        </a>
        <div class="row">
            <div class="col">
                <i class="bi-globe"></i>
                <p>10 Countries</p>
            </div>
            <div class="col">
                <i class="bi-map"></i>
                <p>100+ Places</p>
            </div>
            <div class="col">
                <i class="bi-book"></i>
                <p>100+ Stories</p>
            </div>
        </div>
    </div>
</div>

<!-- Top Places -->
<div class="row">
    <h4 class="mt-1 mb-4">Top Place Visited</h4>
    @foreach ($places as $place)
    <div class="col-md-4 mb-4">
        <div class="card shadow">
            @if($place->image)
            <img
                src="{{ asset('storage/' . $place->image) }}"
                style="object-fit: cover; height: 20vh"
                class="card-img-top"
            />
            @else
            <img
                src="https://source.unsplash.com/600x300?{{ $place->name }}"
                style="object-fit: cover; height: 20vh"
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

<!-- Top Country -->
<div class="row">
    <h4 class="mt-4 mb-4">Top Country Visited</h4>

    @foreach($countries as $country)
    <div class="col-md-3 col-sm-12 mb-4">
        <a
            class="text-decoration-none text-dark"
            href="/countries/{{ $country->slug }}"
        >
            <div class="card bg-dark text-white">
                <img src="https://flagcdn.com/h240/{{ $country->slug }}.png" />
            </div>
            <h5 class="card-text bg-light text-center bold mt-2">
                {{ $country->name_country }}
            </h5>
        </a>
    </div>
    @endforeach
</div>

<!-- Story -->
<div class="row">
    <h4 class="mt-4 mb-4">Top Story Viewed</h4>
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <img
                src="https://source.unsplash.com/600x300?{{ $stories[0]->places->name }}"
                class="card-img-top"
                style="height: 70vh; object-fit: cover"
            />
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <h2 class="mt-5">{{ $stories[0]->title }}</h2>
        <P>{!! Str::limit($stories[0]->body, 500, "..")!!}</P>
        <br />
        <p>
            {{ $stories[0]->author->name }}. {{ $stories[0]->places->name }},
            {{ $stories[0]->places->city }}
        </p>
        <a href="/stories/{{ $stories[0]->slug }}" class="btn btn-primary mt-3">
            <i class="bi bi-newspaper"></i> Read Story
        </a>
    </div>
</div>
@endsection
