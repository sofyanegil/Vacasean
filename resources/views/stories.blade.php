@extends('layouts.main') @section('main')
<div class="row mt-3 p-2">
    <h1 class="mb-3 text-center">All Stories</h1>
    <!-- Search -->
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
    <!-- Hero -->
    <div class="card mb-3">
        @if ($stories[0]->image)
        <div
            class="d-flex justify-content-center"
            style="max-height: 400px; overflow: hidden"
        >
            <img
                src="{{ asset('storage/' . $stories[0]->image) }}"
                class="img-fluid"
                alt="..."
            />
        </div>
        @else
        <img
            src="https://source.unsplash.com/800x200?{{ $stories[0]->places->name }}"
            class="img-fluid"
            alt="{{ $stories[0]->places->name }}"
        />
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
                <small class="text-muted">
                    By.
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
            <a href="#" class="text-decoration-none btn btn-primary"
                >Read more</a
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
                        <small class="card-text mt-1"
                            >By. {{ $story->author->name }}</small
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
                            <button type="button" class="btn btn-primary">
                                Read Story
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="p-5 container d-flex justify-content-center">
    {{ $stories->links() }}
</div>
@endsection
