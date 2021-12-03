<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .about-section {
        background: url(img/dlwlrma.jpg) no-repeat left;
        background-size: 55%;
        background-color: #fdfdfd;
        overflow: hidden;
        padding: 100px 0;
    }

    .inner-container {
        width: 55%;
        float: right;
        background-color: #fdfdfd;
        padding: 100px;
    }

    .inner-container h1 {
        text-align: justify;
    }

    .inner-container h5 {
        font-size: 20px;
    }

    .text {
        text-align: justify;
        font-size: 13px;
    }

    @media screen and (max-width:1200px) {
       .about-section {
           background-size: 100%;
           padding: 50px 40px;
           margin-top: 50px;
           margin-bottom: 50px;
       }
        .inner-container {
           padding: 10px;
           width: 100%;
           font-size: 10px;
       }
    }
</style>
@extends('layouts.main') @section('main')
<div class="about-section">
    <div class="inner-container">
      <h1>About Us</h1>
      <h5>Selamat Datang di VacaSean!!!</h5>
        <p class="text">
        Hallo sobat Vacasean semua, apa kabar hari ini ? Semoga selalu sehat dalam perlindungan-Nya.
        </p>
        <p class="text">
        Website VacaSean ini kami buat dengan sengaja untuk menyediakan informasi dan menjadi referensi anda untuk mencari ide liburan di wilayah ASEAN.
        <p class="text">
        Harapan kami, dengan adanya website ini bisa membantu anda mencari lokasi wisata yang ingin anda kunjungi bersama keluarga atau orang-orang tercinta.
      </p>
    </div>
</div>
@endsection
