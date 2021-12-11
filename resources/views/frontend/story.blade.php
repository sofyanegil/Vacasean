@extends('layouts.main') @section('main')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="mb-sm-4">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a
                            href="/stories"
                            class="text-decoration-none text-dark"
                            >Stories</a
                        >
                    </li>
                    <li class="breadcrumb-item">
                        <a
                            href="/places/{{ $story->places->slug }}"
                            class="text-decoration-none text-dark"
                            >{{ $story->places->name }}</a
                        >
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {!! Str::limit($story->title, 20, "..")!!}
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8">
            <h1 class="mb-3">{{ $story->title }}</h1>

            <p>
                <span class="text-muted"> By. </span>
                {{ $story->author->name }}
                <span class="text-muted">in</span>
                <small
                    >{{ $story->places->name }},
                    {{ $story->places->country->name_country }}</small
                ><span class="text-muted">
                    {{ $story->created_at->diffForHumans() }}</span
                >
            </p>

            @if ($story->image)
            <div
                class="d-flex justify-content-center"
                style="max-height: 400px; overflow: hidden"
            >
                <img
                    src="{{ asset('storage/' . $story->image) }}"
                    class="img-fluid mt-3 mx-auto"
                    style="
                        max-height: 400px;
                        overflow: hidden;
                        object-fit: cover;
                    "
                />
            </div>
            @else
            <img
                src="https://source.unsplash.com/600x300?{{ $story->places->city }}"
                class="d-flex justify-content-center img-fluid mt-3 mx-auto"
                style="max-height: 400px; overflow: hidden; object-fit: cover"
            />
            @endif

            <article class="fs-6 py-4">{!!$story->body !!}</article>

            <a
                href="/stories"
                class="text-decoration-none btn btn-primary mb-3"
            >
                <i class="bi-arrow-left-circle"></i> Back to Stories</a
            >
        </div>
    </div>
</div>
<button
    type="button"
    class="
        mx-5
        justify-content-end
        btn btn-secondary
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
            document.body.scrollTop > 300 ||
            document.documentElement.scrollTop > 300
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
@endsection
