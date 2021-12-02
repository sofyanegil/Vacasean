<style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Open sans", sans-serif;
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
        padding: 150px;
    }
</style>
@extends('layouts.main') @section('main')
<div class="about-section">
    <div class="inner-container">
        <h1>About Us</h1>
        <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iure
            amet non repellendus quia fuga eius! Ipsa soluta, vitae incidunt
            corporis ea deleniti fugiat, alias animi qui nulla natus ullam?
        </p>
        <div class="skills">
            <span>Web Design</span>
            <span>Photo</span>
            <span>Coding</span>
        </div>
    </div>
</div>
@endsection
