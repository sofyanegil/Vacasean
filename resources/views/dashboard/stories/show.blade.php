@extends('dashboard.layouts.main') @section('container')
<div class="row px-2 mb-5">
    <div class="col-md-8 bg-light pt-3">
        <div class="row mt-2 mb-2 mx-sm-auto">
            <div class="ms-0 col-sm-12">
                <a href="/dashboard/stories" class="btn btn-secondary">
                    <span data-feather="arrow-left-circle"></span> To all my
                    Story</a
                >
                <a
                    href="/dashboard/stories/{{ $story->slug }}/edit"
                    class="btn btn-warning text-white"
                >
                    <span data-feather="edit"></span> Edit</a
                >
                <form
                    action="/dashboard/stories/{{ $story->slug }}"
                    method="POST"
                    class="d-inline"
                >
                    @method('delete') @csrf
                    <button
                        class="btn btn-danger"
                        onclick="return confirm('Are You Sure?')"
                    >
                        <span data-feather="x-circle"></span>Delete
                    </button>
                </form>
            </div>
        </div>
        {{-- Content --}}
        <div class="row justify-content-center mb-5">
            <div class="mb-sm-4">
                <nav
                    style="--bs-breadcrumb-divider: '>'"
                    aria-label="breadcrumb"
                >
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
                                href=""
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
                <div
                    class="d-flex justify-content-center"
                    style="max-height: 400px; overflow: hidden"
                >
                    <img
                        src="https://source.unsplash.com/600x300?{{ $story->places->city }}"
                        class="img-fluid mt-3 mx-auto"
                        style="
                            max-height: 400px;
                            overflow: hidden;
                            object-fit: cover;
                        "
                    />
                </div>
                @endif

                <article class="fs-6 py-4">{!!$story->body !!}</article>
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
        {{-- Akhir Content --}}
    </div>
</div>
@endsection
