@extends('layouts.main')
<link rel="stylesheet" href="/css/mapbox.css" />
<link
    href="https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css"
    rel="stylesheet"
/>
@section('main')
<div class="mt-4 p-2 row">
    <div class="col-lg-8 col-sm-12">
        <h1 class="text-center">{{ $places->name}}</h1>
        <h3 class="text-center">
            {{ $places->city }}, {{ $places->country->name_country }}
        </h3>
        @if ($places->image)
        <div
            class="d-flex justify-content-center"
            style="max-height: 400px; overflow: hidden"
        >
            <img
                src="{{ asset('storage/' . $places->image) }}"
                class="img-fluid mt-3 mx-auto"
            />
        </div>
        @else
        <div
            class="d-flex justify-content-center"
            style="max-height: 400px; overflow: hidden"
        >
            <img
                src="https://source.unsplash.com/600x300?{{ $places->city }}"
                class="img-fluid mt-3 mx-auto"
            />
        </div>

        @endif
        <article class="px-md-5 p-3 mt-3">
            <h4 style="font-weight: 600">About the place</h4>

            {!! $places->about !!}
            <a
                href="/places"
                class="text-decoration-none btn btn-primary mx-auto"
            >
                <i class="bi-arrow-left-circle"></i> Back to Places</a
            >
        </article>
    </div>
    <div class="col-lg-4 col-sm-12 text-center">
        <div class="div bg-light p-md-1 p-sm-0">
            <h3>Location</h3>
            <small id="lintang"> {{ $places->lintang}} </small>,
            <small id="bujur">{{ $places->bujur}}</small>
            <div
                id="map"
                class="mt-2"
                style="width: 350px; height: 300px"
            ></div>
            <h4 class="mt-5">Read Their Story about this place</h4>
            @foreach ($stories as $story)
            <div class="row">
                <div class="col-md-12 col-sm-125 p-sm-2">
                    <div class="card shadow-sm" style="max-width: 625px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="position-absolute px-1 py-1">
                                    <small class="text-decoration-none"
                                        ><img
                                            src="https://flagcdn.com/h40/{{ $story->places->country->slug  }}.png"
                                            height="30"
                                    /></small>
                                </div>
                                @if ($story->image)
                                <img
                                    src="{{ asset('storage/' . $story->image) }}"
                                    class="card-img-top h-100 w-100"
                                    style="object-fit: cover"
                                />
                                @else
                                <img
                                    src="https://source.unsplash.com/600x300?{{ $story->places->name }}"
                                    class="card-img-top h-100 w-100"
                                    style="object-fit: cover"
                                />
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        {{$story->title}}
                                    </h6>
                                    <small class="card-text mt-1"
                                        ><span class="text-muted">By.</span>
                                        {{ $story->author->name }}</small
                                    >

                                    <small class="text-muted">
                                        {{ $story->created_at->diffForHumans() }}</small
                                    >
                                    <br />
                                    <small>In {{ $story->places->name }}</small>
                                    <hr />
                                    <small class="card-text">
                                        {!! $story->excerpt !!}
                                    </small>
                                    <p class="card-text">
                                        <a
                                            href="/stories/{{ $story->slug }}"
                                            class="btn btn-primary"
                                        >
                                            <i class="bi bi-newspaper"></i>
                                            Read Story
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <button
                type="button"
                class="
                    mx-5
                    justify-content-end
                    btn btn-dark
                    fixed-bottom
                    btn-floating btn-lg
                    mx-auto
                "
                style="bottom: 5vh; left: 80vw; display: none"
                id="btn-back-to-top"
            >
                <i class="bi bi-arrow-up-circle-fill"></i>
            </button>
            <script>
                //Get the button
                let mybutton = document.getElementById("btn-back-to-top");

                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction();
                };

                function scrollFunction() {
                    if (
                        document.body.scrollTop > 100 ||
                        document.documentElement.scrollTop > 100
                    ) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                }
                // When the user clicks on the button, scroll to the top of the document
                mybutton.addEventListener("click", backToTop);

                function backToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
        </div>
    </div>
</div>
<!-- Jquery -->
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"
></script>
<!-- Mapbox -->
<script src="https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js"></script>
<script src="/js/mapbox.js"></script>
@endsection
