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
                        <a href="" class="text-decoration-none text-dark"
                            >Place</a
                        >
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Title
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-8 bg-light">
            <h1 class="mb-3">Ini Title</h1>

            <p>
                <span class="text-muted"> By. </span
                ><a href="#" class="text-decoration-none">Nama Penulis</a>
                <span class="text-muted">in</span>
                <a href="#" class="text-decoration-none"
                    >Nama Kota, Nama Negara</a
                ><span class="text-muted"> 5 days ago</span>
            </p>

            <div style="max-height: 350px; overflow: hidden">
                <img
                    src="img/xeesoxee.jpg"
                    alt="Nama Place"
                    class="img-fluid"
                />
            </div>

            <article class="my-3 fs-5">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Quibusdam dolor quod, et omnis ratione fugit, recusandae aliquid
                at asperiores, cum magnam. Nobis, magnam voluptatibus ratione
                consectetur enim sapiente necessitatibus aliquid sequi. Natus
                odio culpa provident nobis perferendis quae, aliquid explicabo
                vero quibusdam tempore error ab ipsam quam repellat molestias?
                Alias veniam officiis, quisquam eaque atque facilis enim
                corporis assumenda ratione maxime voluptatibus minus odio
                debitis inventore reiciendis perferendis tenetur est ut, vitae
                iste? Beatae laboriosam et nisi. Quod architecto fugiat minus
                quasi harum nam perspiciatis ex cum fuga. Laboriosam odio
                necessitatibus sapiente quo dolores quas, eaque voluptatum
                expedita ut nobis.
            </article>

            <a
                href="/stories"
                class="text-decoration-none btn btn-primary mb-3"
            >
                <i class="bi-arrow-left-circle"></i> Back to Stories</a
            >
        </div>
    </div>
</div>

@endsection
