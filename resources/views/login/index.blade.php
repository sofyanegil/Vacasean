@extends('layouts.main') @section('main')
<style>
    .form-signin {
        margin-top: 10%;
        margin-bottom: 50%;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

<div class="row justify-content-center">
    <div class="col-md-4 mt-5">
        <img
            src="img/3d-login-1.png"
            width="350"
            alt=""
            class="d-none d-md-block"
        />
    </div>
    <div class="col-md-4">
        @if(session()->has('success'))
        <div
            class="alert alert-success alert-dismissible fade show"
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
        @endif @if(session()->has('loginError'))
        <div
            class="alert alert-danger alert-dismissible fade show"
            role="alert"
        >
            {{ session("loginError") }}
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input
                        type="text"
                        name="username"
                        class="
                            form-control
                            @error('username')
                            is-invalid
                            @enderror
                        "
                        id="username"
                        placeholder="Username"
                        autofocus
                        required
                        value="{{ old('username') }}"
                    />
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        id="password"
                        placeholder="Password"
                        required
                    />
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">
                    Login
                </button>
            </form>
            <small class="d-block text-center mt-3"
                >Not Registered? <a href="/register">Register Now!</a></small
            >
        </main>
    </div>
    <div class="col-md-4">
        <img
            src="img/3d-login-2.png"
            width="400"
            alt=""
            class="d-none d-md-block"
        />
    </div>
</div>
@endsection
