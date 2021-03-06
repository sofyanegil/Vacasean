@extends('layouts.main') @section('main')
<h1 class="mb-3 text-center">All Stories</h1>
<!-- Search -->
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/stories">
            <div class="input-group mb-3">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Search.."
                    name="search"
                />
                <button class="btn btn-outline-dark" type="submit">
                    Search
                </button>
            </div>
        </form>
    </div>
</div>

@if ($stories->count())
<div class="row mt-3 p-2">
    <!-- Hero -->
    <div class="card mb-3 col-md-8 col-sm-12 mx-auto">
        @if ($stories[0]->image)
        <div
            class="d-flex justify-content-center"
            style="max-height: 400px; overflow: hidden"
        >
            <img
                src="{{ asset('storage/' . $stories[0]->image) }}"
                class="img-fluid w-100"
            />
        </div>
        @else
        <div
            class="d-flex justify-content-center"
            style="max-height: 400px; overflow: hidden"
        >
            <img
                src="https://source.unsplash.com/800x200?{{ $stories[0]->places->name }}"
                class="img-fluid w-100"
            />
        </div>

        @endif

        <div class="card-body text-center">
            <h3 class="card-title">
                <a
                    href="#"
                    class="text-decoration-none text-dark"
                    >{{ $stories[0]->title }}</a
                >
            </h3>
            <p>
                <small>
                    <span class="text-muted">By.</span>
                    {{ $stories[0]->author->name }}</small
                >
                <small class="text-muted">
                    {{ $stories[0]->created_at->diffForHumans() }}</small
                >
                <br />
                <small
                    >In {{ $stories[0]->places->name }},
                    {{ $stories[0]->places->city }}</small
                >
            </p>
            <p class="card-text">{!! $stories[0]->excerpt !!}</p>
            <a
                href="/stories/{{ $stories[0]->slug }}"
                class="text-decoration-none btn btn-primary"
            >
                <i class="bi bi-newspaper"></i> Read Story</a
            >
        </div>
    </div>
    <div class="row mt-2 p-2"></div>
</div>

<div class="row mt-2 p-2">
    @foreach ($stories->skip(1) as $story)
    <div class="col-md-6 col-sm-12 p-2">
        <div class="card mb-3 shadow-sm" style="max-width: 625px">
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
                        <h5 class="card-title">
                            {{$story->title}}
                        </h5>
                        <small class="card-text mt-1"
                            ><span class="text-muted">By.</span>
                            {{ $story->author->name }}</small
                        >

                        <small class="text-muted">
                            {{ $story->created_at->diffForHumans() }}</small
                        >
                        <br />
                        <small
                            >In {{ $story->places->name }},
                            {{ $story->places->city }}</small
                        >
                        <p class="card-text mt-3">{!! $story->excerpt !!}</p>
                        <p class="card-text">
                            <a
                                href="/stories/{{ $story->slug }}"
                                class="btn btn-primary"
                            >
                                <i class="bi bi-newspaper"></i> Read Story
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
{{-- No Stories --}}
<div
    class="alert alert-warning col-sm-6 mx-auto align-items-center h-100 d-flex"
    role="alert"
>
    <h1 class="text-center fs-1 flex-fill fs-3 align-self-auto">
        No Stories Found
    </h1>
</div>
@endif
<div class="p-5 container d-flex justify-content-center">
    {{ $stories->links() }}
</div>
@endsection
