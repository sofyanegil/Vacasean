@extends('layouts.main') @section('main')
<div class="row p-3">
    <div class="col-md-7 col-sm-12">
        <img src="img/rajaampat.jpg" alt="about" class="img-fluid" />
    </div>
    <div class="col-md-5">
        <h1 class="mt-3 text-center">About Us</h1>
        <h5>Selamat Datang di VacaSean!!!</h5>
        <p class="text">
            Hallo sobat Vacasean semua, apa kabar hari ini ? Semoga selalu sehat
            dalam perlindungan-Nya.
        </p>
        <p class="text">
            Website VacaSean ini kami buat dengan sengaja untuk menyediakan
            informasi dan menjadi referensi anda untuk mencari ide liburan di
            wilayah ASEAN.
        </p>

        <p class="text">
            Harapan kami, dengan adanya website ini bisa membantu anda mencari
            lokasi wisata yang ingin anda kunjungi bersama keluarga atau
            orang-orang tercinta.
        </p>
    </div>
</div>
<div class="row mt-4">
    <h1 class="text-center mb-3">Our Team</h1>
    <div
        id="carouselExampleIndicators"
        class="carousel slide mb-4"
        data-bs-ride="carousel"
    >
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/team1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/team2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="img/team3.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="col-md-3 col-sm-10">
        <div class="card">
            <img
                src="https://akd.unpas.ac.id/ft/modul/simpati/foto/304/193040025.jpg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Sofyan Egi L</h5>
                <p class="card-text">193040025</p>
                <ul class="nav justify-content-end">
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://github.com/sofyanegil"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#github" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://www.instagram.com/sofyanegi/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://www.linkedin.com/in/sofyanegi/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#linkedin" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img
                src="https://akd.unpas.ac.id/ft/modul/simpati/foto/304/193040009.jpg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Muhammad Wildhan K</h5>
                <p class="card-text">193040009</p>
                <ul class="nav justify-content-end">
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://github.com/wildan090801"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#github" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://instagram.com/ndliw/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://www.linkedin.com/in/mwildhank/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#linkedin" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img
                src="https://akd.unpas.ac.id/ft/modul/simpati/foto/304/193040022.jpg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Yanida Nur Nabila W.S</h5>
                <p class="card-text">193040022</p>
                <ul class="nav justify-content-end">
                    <li class="ms-3">
                        <a class="text-muted" href="https://github.com/Yanidann"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#github" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://www.instagram.com/yanidanurnabila/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://www.linkedin.com/in/ynnws/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#linkedin" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img
                src="https://akd.unpas.ac.id/ft/modul/simpati/foto/304/193040028.jpg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Silvi Fitriawati</h5>
                <p class="card-text">193040028</p>
                <ul class="nav justify-content-end">
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://github.com/SilviFitriawati29"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#github" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://www.instagram.com/silviiifw/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a
                            class="text-muted"
                            href="https://www.linkedin.com/in/silvi-fitriawati-26a8bb203/"
                            ><svg class="bi" width="24" height="24">
                                <use xlink:href="#linkedin" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5 justify-content-center">
    <h1 class="text-center mb-4">Contact Us</h1>
    <div class="col-md-5 col-sm-12">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header text-center">Contact</div>
            <div class="card-body">
                <p class="card-text">
                    If you have any questions, please send them via the form
                    below. We will try to answer your questions.
                </p>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2015785999074!2d107.59059581487186!3d-6.866431369089696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sen!2sid!4v1639199288259!5m2!1sen!2sid"
            width="525"
            height="305"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            class="d-none d-md-block"
        ></iframe>
    </div>
    <div class="col-md-5">
        <form action="https://formsubmit.co/gdriveegi@gmail.com" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputText" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                    >Email Address</label
                >
                <input type="email" name="email" class="form-control" id="exampleInputText" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                    >Telephone</label
                >
                <input type="tel" name="telephone" class="form-control" id="exampleInputText" />
            </div>
            <label for="exampleInputEmail1" class="form-label">Message</label>
            <div class="form-floating">
                <textarea
                name="message"
                    class="form-control"
                    placeholder="Leave a comment here"
                    id="floatingTextarea2"
                    style="height: 100px"
                ></textarea>
                <label for="floatingTextarea2"></label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</div>
@endsection
