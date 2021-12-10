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
    <h1 class="h2 mx-auto bg">My Stories</h1>
</div>

@if (session()->has('success'))
<div
    class="alert alert-success col-lg-8 col-sm-12 alert-dismissible fade show"
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
<a href="/dashboard/stories/create" class="btn btn-success my-3">
        <span data-feather="plus-circle"></span> Create new story</a
    >
@if ($stories->count())
<div class="row mt-2 p-2">
    @foreach ($stories as $story)
    <div class="col-md-4 col-sm-12 p-2">
        <div class="card mb-3 shadow-sm" style="max-width: 625px">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="position-absolute px-1 py-1">
                        <small class="text-decoration-none"
                            ><img
                                src="https://flagcdn.com/h40/{{ $story->places->country->slug  }}.png"
                                height="30"
                                alt="{{ $story->places->country->name_country  }}"
                        /></small>
                    </div>
                    @if ($story->image)
                    <img
                        src="{{ asset('storage/' . $story->image) }}"
                        alt="{{ $story->places->name }}"
                        class="card-img-top"
                        style="object-fit: cover"
                    />
                    @else
                    <img
                        src="https://source.unsplash.com/600x300?{{ $story->places->name }}"
                        class="card-img-top h-100"
                        alt="{{ $story->places->name }}"
                        style="object-fit: cover"
                    />
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$story->title}}
                        </h5>
                        <small
                            >In {{ $story->places->name }},
                            {{ $story->places->city }}</small
                        >
                        <p class="card-text mt-3">{!! $story->excerpt !!}</p>
                        <p class="card-text">
                            <div
                        class="
                            row-cols-sm-9 row-cols-lg-4
                            d-flex
                            justify-content-center
                        "
                    >
                        <a
                            href="/dashboard/stories/{{ $story->slug }}"
                            class="mx-0 badge bg-info my-2 me-1"
                        >
                            <span data-feather="eye"></span
                        ></a>

                        <a
                            href="/dashboard/stories/{{ $story->slug }}/edit"
                            class="mx-0 badge bg-warning my-2 me-1"
                            ><span data-feather="edit"></span
                        ></a>

                        <form
                            action="/dashboard/stories/{{ $story->slug }}"
                            method="POST"
                            class="d-inline"
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
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="p-5 container d-flex justify-content-center">
    {{ $stories->links() }}
</div>
</div>

@else
<div
    class="alert alert-warning col-sm-6 mx-auto align-items-center h-100 d-flex"
    role="alert"
>
    <h1 class="text-center fs-1 flex-fill fs-3 align-self-auto">
        You have no stories
    </h1>
</div>
<a
    href="/dashboard/stories/create"
    class="d-block mx-auto btn btn-success col-lg-3"
>
    <span data-feather="plus-circle"> </span>
    Create new story
</a>
@endif

@endsection
