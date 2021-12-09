<!-- <style>
    * {
        outline: 1px solid red;
    }
</style> -->
@extends('layouts.main') @section('main')
<div class="row mt-3 p-2">
    <div class="col-md-6 col-sm-12 p-2">
        <img
            src="https://images.unsplash.com/photo-1519544442-93857b48665e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80"
            class="rounded col-sm-12"
            style="max-width: 80vw; height: 50vh; object-fit: cover"
            alt="..."
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
    <div class="col-md-4 col-sm-12 mb-3">
        <div class="card">
            <img
                src="https://images.unsplash.com/photo-1603139790173-71344104bc4d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                class="card-img-top"
                alt="..."
                style="max-height: 65vh; object-fit: cover"
            />
            <div class="card-body">
                <h4 class="card-text">{{ $places[0]->name }}</h4>
                <p>
                    {{ $places[0]->city }},
                    {{ $places[0]->country->name_country }}
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
    <div class="col-md-8 col-sm-12">
        <div class="row mb-4">
            <div class="col-6">
                <div class="card shadow">
                    <img
                        src="https://images.unsplash.com/photo-1605711217046-d3885ceb5fec?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80"
                        class="card-img-top"
                        alt="..."
                        style="max-height: 20vh; object-fit: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[1]->name }}</h4>
                        <p>
                            {{ $places[1]->city }},
                            {{ $places[1]->country->name_country }}
                        </p>
                        <a
                            href="/places/{{ $places[1]->slug }}"
                            class="btn btn-success w-100"
                        >
                            <i class="bi-compass"></i> Explore Now!
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow">
                    <img
                        src="https://images.unsplash.com/photo-1589394815804-964ed0be2eb5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1101&q=80"
                        class="card-img-top"
                        alt="..."
                        style="max-height: 20vh; object-fit: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[2]->name }}</h4>
                        <p>
                            {{ $places[2]->city }},
                            {{ $places[2]->country->name_country }}
                        </p>
                        <a
                            href="/places/{{ $places[2]->slug }}"
                            class="btn btn-success w-100"
                        >
                            <i class="bi-compass"></i> Explore Now!
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card shadow">
                    <img
                        src="https://images.unsplash.com/photo-1510923119584-fc67ed7ff3de?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1174&q=80"
                        class="card-img-top"
                        alt="..."
                        style="max-height: 20vh; object-fit: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[3]->name }}</h4>
                        <p>
                            {{ $places[3]->city }},
                            {{ $places[3]->country->name_country }}
                        </p>
                        <a
                            href="/places/{{ $places[3]->slug }}"
                            class="btn btn-success w-100"
                        >
                            <i class="bi-compass"></i> Explore Now!
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow">
                    <img
                        src="https://images.unsplash.com/photo-1561461343-7c9d7c1dc773?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        class="card-img-top"
                        alt="..."
                        style="max-height: 20vh; object-fit: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[4]->name }}</h4>
                        <p>
                            {{ $places[4]->city }},
                            {{ $places[4]->country->name_country }}
                        </p>
                        <a
                            href="/places/{{ $places[4]->slug }}"
                            class="btn btn-success w-100"
                        >
                            <i class="bi-compass"></i> Explore Now!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <img
                    src="https://flagcdn.com/h240/{{ $country->slug }}.png"
                    alt="{{ $country->name_country}}"
                />
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
                src="https://images.unsplash.com/photo-1605472074902-fd448c230dd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                class="card-img-top"
                alt="..."
                style="max-height: 70vh; object-fit: cover"
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
