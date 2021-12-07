@extends('layouts.main') @section('main')

<div class="container">
    <div class="row mt-3">
        <h1 class="mb-3 text-center">ASEAN Countries</h1>
        @foreach($countries as $country)
        <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white">
                <div
                    class="position-absolute px-3 py-2 text-white"
                    style="background-color: rgba(0, 0, 0, 0.5)"
                >
                    <a
                        href="/countries/{{$country->slug }}"
                        class="text-decoration-none text-white"
                        >{{ $country->name_country }}</a
                    >
                </div>
                <img
                    src="https://flagcdn.com/h240/{{ $country->slug }}.png"
                    height="240"
                    alt="{{ $country->name_country}}"
                />
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
