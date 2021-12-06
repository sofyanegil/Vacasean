@extends('layouts.main') @section('main')
<div class="row mt-3 p-2">
    <h1 class="mb-3 text-center">All Stories</h1>
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
    <div class="card mb-3">
        <div style="max-height: 400px; overflow: hidden">
            <img src="img/geewonii.jpg" alt="Test" class="img-fluid" />
        </div>

        <div class="card-body text-center">
            <h3 class="card-title">
                <a href="#" class="text-decoration-none text-dark">Title</a>
            </h3>
            <p>
                <small class="text-muted">
                    By.
                    <a href="#" class="text-decoration-none">Author</a>
                </small>
            </p>
            <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
            </p>
            <a href="#" class="text-decoration-none btn btn-primary"
                >Read more</a
            >
        </div>
    </div>
    <div class="row mt-2 p-2"></div>
    <div class="col-md-6 col-sm-12 p-2">
        <div class="card mb-3" style="max-width: 625px">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="position-absolute px-1 py-1">
                        <small class="text-decoration-none"
                            ><img
                                src="https://flagcdn.com/h40/id.png"
                                height="30"
                                alt="Indonesia"
                        /></small>
                    </div>
                    <img
                        src="img/geewonii.jpg"
                        class="img-fluid rounded-start"
                        alt="..."
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Pengalaman Liburan di Pulau Komodo
                        </h5>
                        <small class="card-text mt-1"
                            >By. Muhammad Wildhan</small
                        >
                        <small class="text-muted">3 mins ago</small>

                        <p class="card-text mt-3">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content
                            is a little bit longer.
                        </p>
                        <p class="card-text">
                            <button type="button" class="btn btn-primary">
                                Read Story
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 p-2">
        <div class="card mb-3" style="max-width: 625px">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="position-absolute px-1 py-1">
                        <small class="text-decoration-none"
                            ><img
                                src="https://flagcdn.com/h40/kh.png"
                                height="30"
                                alt="Kamboja"
                        /></small>
                    </div>
                    <img
                        src="img/geewonii.jpg"
                        class="img-fluid rounded-start"
                        alt="..."
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Pengalaman Pergi ke Angkor Wat
                        </h5>
                        <small class="card-text mt-1"
                            >By. Muhammad Wildhan</small
                        >
                        <small class="text-muted">3 mins ago</small>

                        <p class="card-text mt-3">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content
                            is a little bit longer.
                        </p>
                        <p class="card-text">
                            <button type="button" class="btn btn-primary">
                                Read Story
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-2 p-2">
    <div class="col-md-6 col-sm-12 p-2">
        <div class="card mb-3" style="max-width: 625px">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="position-absolute px-1 py-1">
                        <small class="text-decoration-none"
                            ><img
                                src="https://flagcdn.com/h40/sg.png"
                                height="30"
                                alt="Singapura"
                        /></small>
                    </div>
                    <img
                        src="img/geewonii.jpg"
                        class="img-fluid rounded-start"
                        alt="..."
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Pengalaman Memasuki Wahana di Universal Studio
                            Singapura
                        </h5>
                        <small class="card-text mt-1"
                            >By. Muhammad Wildhan</small
                        >
                        <small class="text-muted">3 mins ago</small>

                        <p class="card-text mt-3">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content
                            is a little bit longer.
                        </p>
                        <p class="card-text">
                            <button type="button" class="btn btn-primary">
                                Read Story
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 p-2">
        <div class="card mb-3" style="max-width: 625px">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="position-absolute px-1 py-1">
                        <small class="text-decoration-none"
                            ><img
                                src="https://flagcdn.com/h40/th.png"
                                height="30"
                                alt="Thailand"
                        /></small>
                    </div>
                    <img
                        src="img/geewonii.jpg"
                        class="img-fluid rounded-start"
                        alt="..."
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Pengalaman Staycation di Pulau Phuket
                        </h5>
                        <small class="card-text mt-1"
                            >By. Muhammad Wildhan</small
                        >
                        <small class="text-muted">3 mins ago</small>

                        <p class="card-text mt-3">
                            This is a wider card with supporting text below as a
                            natural lead-in to additional content. This content
                            is a little bit longer.
                        </p>
                        <p class="card-text">
                            <button type="button" class="btn btn-primary">
                                Read Story
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
