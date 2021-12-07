@extends('layouts.main') @section('main')

<div class="container">
    <h1 class="mb-3 text-center">Vacation Places in ASEAN Countries</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <!-- <div class="btn-group dropstart">
                    <button
                        type="button"
                        class="btn btn-light dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        List Country
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#indonesia"
                                >Indonesia</a
                            >
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#malaysia"
                                >Malaysia</a
                            >
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#singapura"
                                >Singapura</a
                            >
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#thailand"
                                >Thailand</a
                            >
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#filipina"
                                >Filipina</a
                            >
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#vietnam">Vietnam</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#laos">Laos</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#myanmar">Myanmar</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#brunei">Brunei</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#kamboja">Kamboja</a>
                        </li>
                    </ul>
                </div> -->
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
        @foreach ($places as $place)
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <div
                    class="position-absolute px-1 py-1 text-white"
                    style="background-color: rgba(0, 0, 0, 0.5)"
                >
                    <small class="text-warning">{{ $place->bujur }}</small>
                    <br />
                    <small class="text-light">{{ $place->lintang }}</small>
                </div>
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
                    </p>
                    <a href="/" class="btn btn-success w-100">
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
