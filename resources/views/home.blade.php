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
            class="rounded float-end col-sm-12"
            style="min-width: 40vw; max-height: 50vh"
            alt="..."
        />
    </div>
    <div class="col-md-6 col-sm-12 p-2">
        <h2 class="mb-2 mb-sm-0">
            Take a rest from your job for travel around and chilling.
        </h2>
        <h6 class="mt-3 col-12 mb-sm-1">
            dolor sit amet consectetur adipisicing elit. Mollitia cum excepturi
            facilis maiores quis obcaecati magni veniam, laboriosam inventore.
            Dignissimos modi pariatur illum, ratione blanditiis iure dolorem
            fuga, vitae natus, fugiat reiciendis doloremque. In recusandae,
            quibusdam beatae quod totam, libero praesentium harum est nemo rerum
            voluptatem et modi incidunt, quisquam eligendi illum omnis
            voluptatum vero assumenda rem aliquam qui? Suscipit debitis neque in
            id quibusdam sapiente provident dolorem, similique earum accusamus
            voluptates.
        </h6>
        <button type="button" class="btn btn-primary mt-3">
            Explore the Place
        </button>
        <div class="row mt-4">
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
    <h5>Top Place Visited</h5>
    <div class="col-md-4 col-sm-12 mb-3">
        <div class="card">
            <img
                src="https://images.unsplash.com/photo-1603139790173-71344104bc4d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                class="card-img-top"
                alt="..."
                style="min-height: 65vh"
            />
            <div class="card-body">
                <h4 class="card-text">{{ $places[0]->name }}</h4>
                <p>
                    {{ $places[0]->city }},
                    {{ $places[0]->country->name_country }}
                </p>
                <a href="/" class="btn btn-success w-100">
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
                        style="max-height: 20vh; background-size: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[1]->name }}</h4>
                        <p>
                            {{ $places[1]->city }},
                            {{ $places[1]->country->name_country }}
                        </p>
                        <a href="/" class="btn btn-success w-100">
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
                        style="max-height: 20vh; background-size: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[2]->name }}</h4>
                        <p>
                            {{ $places[2]->city }},
                            {{ $places[2]->country->name_country }}
                        </p>
                        <a href="/" class="btn btn-success w-100">
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
                        style="max-height: 20vh; background-size: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[3]->name }}</h4>
                        <p>
                            {{ $places[3]->city }},
                            {{ $places[3]->country->name_country }}
                        </p>
                        <a href="/" class="btn btn-success w-100">
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
                        style="max-height: 20vh; background-size: cover"
                    />
                    <div class="card-body bg-light col-sm-12">
                        <h4 class="card-text">{{ $places[4]->name }}</h4>
                        <p>
                            {{ $places[4]->city }},
                            {{ $places[4]->country->name_country }}
                        </p>
                        <a href="/" class="btn btn-success w-100">
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
    <h5 class="mt-4 mb-4">Top Country Visited</h5>

    <div class="col-md-3 col-sm-12 mb-4">
        <div class="card">
            <img
                src="https://flagcdn.com/h240/{{ $countries[0]->slug }}.png"
                class="card-img-top border-dark border-warning"
            />
        </div>
        <h5 class="card-text bg-light text-center bold mt-2">
            {{ $countries[0]->name_country }}
        </h5>
    </div>
    <div class="col-md-3 col-sm-12 mb-4">
        <div class="card">
            <img
                src="https://flagcdn.com/h240/{{ $countries[9]->slug }}.png"
                class="card-img-top border-dark border-warning"
            />
        </div>
        <h5 class="card-text bg-light text-center bold mt-2">
            {{ $countries[9]->name_country }}
        </h5>
    </div>
    <div class="col-md-3 col-sm-12 mb-4">
        <div class="card">
            <img
                src="https://flagcdn.com/h240/{{ $countries[2]->slug }}.png"
                class="card-img-top border-dark border-warning"
            />
        </div>
        <h5 class="card-text bg-light text-center bold mt-2">
            {{ $countries[2]->name_country }}
        </h5>
    </div>
    <div class="col-md-3 col-sm-12 mb-4">
        <div class="card">
            <img
                src="https://flagcdn.com/h240/{{ $countries[3]->slug }}.png"
                class="card-img-top border-dark border-warning"
            />
        </div>
        <h5 class="card-text bg-light text-center bold mt-2">
            {{ $countries[3]->name_country }}
        </h5>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-4 col-sm-12">
        <div class="card" style="width: 25rem">
            <img
                src="https://images.unsplash.com/photo-1605472074902-fd448c230dd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                class="card-img-top"
                alt="..."
            />
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <p class="mt-5">Perjalanan pertama ke Universal Studio Singapura</p>
        <h5>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum et
            quod quis tempore natus excepturi ab sit, itaque laboriosam,
            repudiandae atque perferendis quae voluptates delectus asperiores
            odit ipsam quo, iure velit? Iste, neque. Non optio architecto vitae
            eum saepe est facilis porro cum laudantium quae cupiditate, officia
            blanditiis eveniet iusto recusandae quia minima ullam necessitatibus
            vel harum soluta nulla a laborum! Dolores iusto sint temporibus
            voluptatibus commodi, velit voluptates deserunt, numquam, unde optio
            assumenda? Voluptatem deleniti dolore ullam omnis eum,
            exercitationem sunt id recusandae illum consequatur, quaerat veniam
            laborum dignissimos pariatur praesentium rem, velit quod minima
            perferendis ea ipsum quibusdam!
        </h5>
        <br />
        <p>Muhammad Wildhan, Universal Studio, Singapura</p>
        <button type="button" class="btn btn-primary mt-3">Read Story</button>
    </div>
</div>
@endsection
