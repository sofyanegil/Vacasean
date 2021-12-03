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
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
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
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
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
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
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
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
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
        <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem">
                <img
                    src="img/lalalalisa_m.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h4 class="card-text">Monas</h4>
                    <p>Jakarta, Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
