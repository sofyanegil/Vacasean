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

    <!-- Row Indonesia -->
    <div class="row mt-4" id="indonesia">
        <h4 class="mb-3">
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
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Indonesia")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Filiphina -->
    <div class="row mt-3" id="filipina">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/ph.png"
                srcset="
                    https://flagcdn.com/48x36/ph.png 2x,
                    https://flagcdn.com/72x54/ph.png 3x
                "
                width="24"
                height="18"
                alt="Filipina"
            />
            Filipina
            <img
                src="https://flagcdn.com/24x18/ph.png"
                srcset="
                    https://flagcdn.com/48x36/ph.png 2x,
                    https://flagcdn.com/72x54/ph.png 3x
                "
                width="24"
                height="18"
                alt="Filipina"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Filipina")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Thailand -->
    <div class="row mt-3" id="thailand">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/th.png"
                srcset="
                    https://flagcdn.com/48x36/th.png 2x,
                    https://flagcdn.com/72x54/th.png 3x
                "
                width="24"
                height="18"
                alt="Thailand"
            />
            Thailand
            <img
                src="https://flagcdn.com/24x18/th.png"
                srcset="
                    https://flagcdn.com/48x36/th.png 2x,
                    https://flagcdn.com/72x54/th.png 3x
                "
                width="24"
                height="18"
                alt="Thailand"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Thailand")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Malaysia -->
    <div class="row mt-3" id="malaysia">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/my.png"
                srcset="
                    https://flagcdn.com/48x36/my.png 2x,
                    https://flagcdn.com/72x54/my.png 3x
                "
                width="24"
                height="18"
                alt="Malaysia"
            />
            Malaysia
            <img
                src="https://flagcdn.com/24x18/my.png"
                srcset="
                    https://flagcdn.com/48x36/my.png 2x,
                    https://flagcdn.com/72x54/my.png 3x
                "
                width="24"
                height="18"
                alt="Malaysia"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Malaysia")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Singapura -->
    <div class="row mt-3" id="singapura">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/sg.png"
                srcset="
                    https://flagcdn.com/48x36/sg.png 2x,
                    https://flagcdn.com/72x54/sg.png 3x
                "
                width="24"
                height="18"
                alt="Singapura"
            />
            Singapura
            <img
                src="https://flagcdn.com/24x18/sg.png"
                srcset="
                    https://flagcdn.com/48x36/sg.png 2x,
                    https://flagcdn.com/72x54/sg.png 3x
                "
                width="24"
                height="18"
                alt="Singapura"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Singapura")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Vietnam -->
    <div class="row mt-3" id="vietnam">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/vn.png"
                srcset="
                    https://flagcdn.com/48x36/vn.png 2x,
                    https://flagcdn.com/72x54/vn.png 3x
                "
                width="24"
                height="18"
                alt="Singapura"
            />
            Vietnam
            <img
                src="https://flagcdn.com/24x18/vn.png"
                srcset="
                    https://flagcdn.com/48x36/vn.png 2x,
                    https://flagcdn.com/72x54/vn.png 3x
                "
                width="24"
                height="18"
                alt="Vietnam"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Vietnam")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Laos -->
    <div class="row mt-3" id="laos">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/la.png"
                srcset="
                    https://flagcdn.com/48x36/la.png 2x,
                    https://flagcdn.com/72x54/la.png 3x
                "
                width="24"
                height="18"
                alt="Laos"
            />
            Laos
            <img
                src="https://flagcdn.com/24x18/la.png"
                srcset="
                    https://flagcdn.com/48x36/la.png 2x,
                    https://flagcdn.com/72x54/la.png 3x
                "
                width="24"
                height="18"
                alt="Laos"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Laos")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Kamboja -->
    <div class="row mt-3" id="kamboja">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/kh.png"
                srcset="
                    https://flagcdn.com/48x36/kh.png 2x,
                    https://flagcdn.com/72x54/kh.png 3x
                "
                width="24"
                height="18"
                alt="Kamboja"
            />
            Kamboja
            <img
                src="https://flagcdn.com/24x18/kh.png"
                srcset="
                    https://flagcdn.com/48x36/kh.png 2x,
                    https://flagcdn.com/72x54/kh.png 3x
                "
                width="24"
                height="18"
                alt="Kamboja"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Kamboja")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Brunei -->
    <div class="row mt-3" id="brunei">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/bn.png"
                srcset="
                    https://flagcdn.com/48x36/bn.png 2x,
                    https://flagcdn.com/72x54/bn.png 3x
                "
                width="24"
                height="18"
                alt="Brunei"
            />
            Brunei
            <img
                src="https://flagcdn.com/24x18/bn.png"
                srcset="
                    https://flagcdn.com/48x36/bn.png 2x,
                    https://flagcdn.com/72x54/bn.png 3x
                "
                width="24"
                height="18"
                alt="Brunei"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Brunei")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
    <!-- Row Myanmar -->
    <div class="row mt-3" id="myanmar">
        <h4 class="mb-2">
            <img
                src="https://flagcdn.com/24x18/mm.png"
                srcset="
                    https://flagcdn.com/48x36/mm.png 2x,
                    https://flagcdn.com/72x54/mm.png 3x
                "
                width="24"
                height="18"
                alt="Myanmar"
            />
            Myanmar
            <img
                src="https://flagcdn.com/24x18/mm.png"
                srcset="
                    https://flagcdn.com/48x36/mm.png 2x,
                    https://flagcdn.com/72x54/mm.png 3x
                "
                width="24"
                height="18"
                alt="Myanmar"
            />
        </h4>
        @foreach ($places as $place) @if ($place->country->name_country ==
        "Myanmar")
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
                    src="https://www.planetware.com/wpimages/2019/10/southeast-asia-best-places-to-visit-bangkok-thailand.jpg"
                    class="card-img-top"
                    alt="..."
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
        @endif @endforeach
    </div>
</div>
@endsection
