@extends('dashboard.layouts.main') @section('container')
<div
    class="
        d-flex
        justify-content-between
        flex-wrap flex-md-nowrap
        align-items-center
        pt-3
        pb-2
        mb-1
        border-bottom
    "
>
    <h1 class="h2">Hi, {{auth()->user()->name}}</h1>
</div>
<a href="/dashboard/stories/create" class="btn btn-success mb-2">
    <span data-feather="plus-circle"></span> Create new story</a
>
@can('admin')
<a href="/dashboard/places/create" class="btn btn-warning mb-2">
    <span data-feather="plus-circle"></span> Add new place</a
>
@endcan
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
                    href="/places/{{ $place->slug }}"
                    class="btn btn-success w-100"
                >
                    <i class="bi-compass"></i> Explore Now!
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
