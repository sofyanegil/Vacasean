@extends('dashboard.layouts.main') @section('container')
<div class="row px-2 mb-5">
    <div class="col-md-8 bg-light pt-3">
        <div class="row mt-2 mb-2 mx-sm-auto">
            <div class="ms-0 col-sm-12">
                <a href="/dashboard/places" class="btn btn-secondary">
                    <span data-feather="arrow-left-circle"></span> To all my
                    Place</a
                >
                <a
                    href="/dashboard/places/{{ $place->slug }}/edit"
                    class="btn btn-warning text-white"
                >
                    <span data-feather="edit"></span> Edit</a
                >
                <form
                    action="/dashboard/places/{{ $place->slug }}"
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
            <div class="col-md-8">
                <h1 class="mb-3">{{ $place->name }}</h1>

                <p>
                    <span class="text-muted"> By. Admin</span>
                    <span class="text-muted">in</span>
                    <small> {{ $place->country->name_country }}</small
                    ><span class="text-muted">
                        {{ $place->created_at->diffForHumans() }}</span
                    >
                </p>

                @if ($place->image)
                <div
                    class="d-flex justify-content-center"
                    style="max-height: 400px; overflow: hidden"
                >
                    <img
                        src="{{ asset('storage/' . $place->image) }}"
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
                        src="https://source.unsplash.com/600x300?{{ $place->city }}"
                        class="img-fluid mt-3 mx-auto"
                        style="
                            max-height: 400px;
                            overflow: hidden;
                            object-fit: cover;
                        "
                    />
                </div>
                @endif

                <article class="fs-6 py-4">{!!$place->about !!}</article>
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
