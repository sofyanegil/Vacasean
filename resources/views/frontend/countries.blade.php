@extends('layouts.main') @section('main')

<div class="container">
    <div class="row mt-3">
        <h1 class="mb-5 text-center">ASEAN Countries</h1>
        @foreach($countries as $country)
        <div class="col-md-4 mb-4">
            <a
                class="text-decoration-none text-dark"
                href="/countries/{{ $country->slug }}"
            >
                <div class="card bg-dark text-white">
                    <img
                        src="https://flagcdn.com/h240/{{ $country->slug }}.png"
                        height="240"
                    />
                </div>
                <h5 class="card-text bg-light text-center bold mt-2">
                    {{ $country->name_country }}
                </h5>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
