@extends('dashboard.layouts.main') @section('container')
<div
    class="
        d-flex
        justify-content-between
        flex-wrap flex-md-nowrap
        align-items-center
        pt-3
        pb-2
        mb-3
        bg-light
        border-bottom
    "
>
    <h1 class="h2 mx-auto bg">All Places</h1>
</div>

@if (session()->has('success'))
<div
    class="alert alert-success col-lg-6 col-sm-12 alert-dismissible fade show"
    role="alert"
>
    {{ session("success") }}
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
    ></button>
</div>
@endif

<div class="col-lg-12">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Delete Place make all story in that place will be delete
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    </div>
    <a href="/dashboard/places/create" class="btn btn-success my-3">
        <span data-feather="plus-circle"></span> Add new place</a
    >
    <div class="row mt-4">
        @foreach ($places as $place)
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                @if($place->image)
                <img
                    src="{{ asset('storage/' . $place->image) }}"
                    style="object-fit: cover"
                    class="card-img-top"
                />
                @else
                <img
                    src="https://source.unsplash.com/600x300?{{ $place->name }}"
                    style="object-fit: cover"
                    class="card-img-top"
                />
                @endif
                <div class="card-body bg-light">
                    <h4 class="card-text">{{ $place->name }}</h4>
                    <p>
                        {{ $place->city }}, {{ $place->country->name_country }}
                        <img
                            src="https://flagcdn.com/24x18/{{ $place->country->slug }}.png"
                            srcset="
                                https://flagcdn.com/48x36/{{ $place->country->slug }}.png 2x,
                                https://flagcdn.com/72x54/{{ $place->country->slug }}.png 3x
                            "
                            width="24"
                            height="18"
                        />
                    </p>
                    <a
                        href="/dashboard/places/{{ $place->slug }}"
                        class="mx-0 badge bg-info my-2 me-1 w-100"
                    >
                        <span data-feather="eye"></span
                    ></a>

                    <a
                        href="/dashboard/places/{{ $place->slug }}/edit"
                        class="mx-0 badge bg-warning my-2 me-1 w-100"
                        ><span data-feather="edit"></span
                    ></a>

                    <form
                        action="/dashboard/places/{{ $place->slug }}"
                        method="POST"
                    >
                        @method('delete') @csrf
                        <button
                            class="mx-0 badge bg-danger border-0 w-100 my-2"
                            onclick="return confirm('Are You Sure?')"
                        >
                            <span data-feather="x-circle"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <div class="p-5 container d-flex justify-content-center">
            {{ $places->links() }}
        </div>
    </div>
</div>

@endsection
